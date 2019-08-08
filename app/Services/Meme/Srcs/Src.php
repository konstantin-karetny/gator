<?php

namespace App\Services\Meme\Srcs;

use App\Lib\ClassMap;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Services\Meme\Meme as MemeMemeService;

abstract class Src
{
    protected
        $model = null;

    public function __construct()
    {
        $this->model = MemeSrcModel::where('alias', ClassMap::getAlias($this))->first();
    }

    public function filter(MemeMemeModel $model): bool
    {
        return !(
            MemeMemeModel::all()
                ->where('src_id', $model->src_id)
                ->where('original_id', $model->original_id)
                ->count()
        );
    }

    public function format($item): MemeMemeModel
    {
        return new MemeMemeModel();
    }

    public function formatRequestItems(array $items, int $quantity): array
    {
        $formatteds = array_slice($items, 0, $quantity);
        foreach ($formatteds as $item) {
            $item->src_alias = $this->getModel()->alias;
        }
        return $formatteds;
    }

    public function getModel(): MemeSrcModel
    {
        return $this->model;
    }

    public function requestItems(int $quantity): array
    {
        return [];
    }

    public function store(MemeMemeModel $model): MemeMemeModel
    {
        return (new MemeMemeService())->store($model->getAttributes());
    }
}
