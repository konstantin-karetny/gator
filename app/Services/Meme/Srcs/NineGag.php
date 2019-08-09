<?php

namespace App\Services\Meme\Srcs;

use App\Lib\Log;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Type as MemeTypeModel;
use App\Services\Meme\Srcs\Src as MemeSrcsSrc;
use Exception;
use Throwable;

class NineGag extends MemeSrcsSrc
{
    public function format($item): MemeMemeModel
    {
        $model                   = new MemeMemeModel();
        $model->src_id           = $this->getModel()->id;
        $model->raw              = $item;
        $model->type             = $this->getType($model);
        $model->type_id          = $model->type->id;
        $model->body             = $this->getBody($model);
        $model->name             = $this->getName($model);
        $model->preview          = $this->getPreview($model);
        $model->comments_count   = (int)    $item->commentsCount;
        $model->created_at       = (int)    $item->creationTs;
        $model->down_votes_count = (int)    $item->downVoteCount;
        $model->up_votes_count   = (int)    $item->upVoteCount;
        $model->original_id      = (string) $item->id;
        return $model;
    }

    public function getBody(MemeMemeModel $model): string
    {
        switch ($model->type->alias) {
            case 'image':
                return (string) $model->raw->images->image460->url;
            case 'video':
                return (string) $model->raw->images->image460sv->url;
            default:
                return '';
        };
    }

    public function getName(MemeMemeModel $model): string
    {
        return
            html_entity_decode(
                htmlspecialchars_decode(
                    trim($model->raw->title),
                    ENT_QUOTES
                )
            );
    }

    public function getPreview(MemeMemeModel $model): string
    {
        return
            $model->type->alias != 'video'
                ? ''
                : (string) $model->raw->images->image700->url;
    }

    public function getType(MemeMemeModel $model): MemeTypeModel
    {
        $alias = '';
        switch (strtolower(trim($model->raw->type))) {
            case 'animated':
                $alias = 'video';
                break;
            case 'article':
                $alias = 'text';
                break;
            case 'photo':
                $alias = 'image';
                break;
        }
        foreach (MemeTypeModel::all(['id', 'alias']) as $type) {
            if ($type->alias == $alias) {
                return $type;
            }
        }
        throw new Exception('Failed to get type');
    }

    public function requestItems(int $quantity): array
    {
        $items = [];
        $error = 'Failed to request items from \'' . $this->getModel()->alias . '\'';
        do {
            $curl = curl_init(
                'https://9gag.com/v1/group-posts/group/default/type/hot?c=10' .
                (
                    $items
                        ? (
                            '&after=' .
                            implode(
                                ',',
                                array_slice(
                                    array_reverse(
                                        array_column($items, 'id')
                                    ),
                                    0,
                                    3
                                )
                            )
                        )
                        : ''
                )
            );
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $res        = curl_exec($curl);
            $curl_error = curl_error($curl);
            curl_close($curl);
            if ($res === false) {
                Log::fileLine($error . '. cURL execution failed. ' . $curl_error);
                return $items;
            }
            try {
                $decoded = json_decode($res, false, 512, JSON_THROW_ON_ERROR);
            } catch (Throwable $e) {
                Log::fileLine($error . '. JSON decoding failed. ' . $e->getMessage());
                return $items;
            }
            $status = strtolower(trim($decoded->meta->status ?: ''));
            if ($status !== 'success') {
                Log::fileLine($error . '. Reply status \'' . $status . '\', \'success\' expected');
                return $items;
            }
            $posts = $decoded->data->posts ?: [];
            if (!$posts) {
                Log::fileLine($error . '. No posts');
                return $items;
            }
            $items = array_merge($items, $posts);
        }
        while (count($items) < $quantity);
        return $this->formatRequestItems($items, $quantity);
    }

    public function whetherToAdd(MemeMemeModel $model): bool
    {
        return
            parent::whetherToAdd($model) &&
            (
                $model->up_votes_count - $model->down_votes_count
                >
                $this->getModel()->filter_min_votes
            );
    }
}
