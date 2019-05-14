<?php

namespace App\Services\Combines;

use App\Models\Post as PostModel;
use App\Services\HarvestItem;

abstract class Combine
{
    abstract public function filter(HarvestItem $item): bool;

    abstract public function format($raw): HarvestItem;

    abstract public function validate(array $data): array;

    public function save(HarvestItem $item): PostModel
    {
        $model              = new PostModel;
        $model->name        = $item->name;
        $model->original_id = $item->original_id;
        $model->src_id      = $item->src_id;
        $model->type_id     = $item->type_id;
        $model->save();
        return $model;
    }
}