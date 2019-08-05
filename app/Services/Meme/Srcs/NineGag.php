<?php

namespace App\Services\Meme\Srcs;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Type as MemeTypeModel;
use App\Services\Meme\Srcs\Src as MemeSrcsSrc;

class NineGag extends MemeSrcsSrc
{
    public function filter(MemeMemeModel $model): bool
    {
        return
            parent::filter($model) &&
            (
                $model->up_votes_count - $model->down_votes_count
                >
                $this->filter_min_votes
            );
    }

    public function format($item): MemeMemeModel
    {
        $model                   = new MemeMemeModel();
        $model->src_id           = $this->id;
        $model->raw              = $item->raw;
        $model->type             = $this->getType($model);
        $model->type_id          = $model->type->id;
        $model->body             = $this->getBody($model);
        $model->name             = $this->getName($model);
        $model->poster           = $this->getPoster($model);
        $model->comments_count   = (int)    $item->raw->commentsCount;
        $model->created_at       = (int)    $item->raw->creationTs;
        $model->down_votes_count = (int)    $item->raw->downVoteCount;
        $model->up_votes_count   = (int)    $item->raw->upVoteCount;
        $model->original_id      = (string) $item->raw->id;
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

    public function getPoster(MemeMemeModel $model): string
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
        };
        foreach (MemeTypeModel::all(['id', 'alias']) as $type) {
            if ($type->alias == $alias) {
                return $type;
            }
        }
        throw new Exception('Type detection failed');
    }
}
