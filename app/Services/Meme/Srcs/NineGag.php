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
        $meme                   = new MemeMemeModel();
        $meme->src_id           = $this->getModel()->id;
        $meme->raw              = $item;
        $meme->type             = $this->getType($meme);
        $meme->type_id          = $meme->type->id;
        $meme->body             = $this->getBody($meme);
        $meme->name             = $this->getName($meme);
        $meme->preview          = $this->getPreview($meme);
        $meme->comments_count   = (int)    $item->commentsCount;
        $meme->created_at       = (int)    $item->creationTs;
        $meme->down_votes_count = (int)    $item->downVoteCount;
        $meme->up_votes_count   = (int)    $item->upVoteCount;
        $meme->original_id      = (string) $item->id;
        return $meme;
    }

    public function getBody(MemeMemeModel $meme): string
    {
        switch ($meme->type->alias) {
            case 'image':
                return (string) $meme->raw->images->image460->url;
            case 'video':
                return (string) $meme->raw->images->image460sv->url;
            default:
                return '';
        };
    }

    public function getName(MemeMemeModel $meme): string
    {
        return
            html_entity_decode(
                htmlspecialchars_decode(
                    trim($meme->raw->title),
                    ENT_QUOTES
                )
            );
    }

    public function getPreview(MemeMemeModel $meme): string
    {
        return
            $meme->type->alias != 'video'
                ? ''
                : (string) $meme->raw->images->image700->url;
    }

    public function getType(MemeMemeModel $meme): MemeTypeModel
    {
        $alias = '';
        switch (strtolower(trim($meme->raw->type))) {
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
        $type = MemeTypeModel::where('alias', $alias)->first();
        if (!$type) {
            throw new Exception('Failed to get type');
        }
        return $type;
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

    public function whetherToAdd(MemeMemeModel $meme): bool
    {
        return
            parent::whetherToAdd($meme) &&
            (
                $meme->up_votes_count - $meme->down_votes_count
                >
                $this->getModel()->filter_min_votes
            );
    }
}
