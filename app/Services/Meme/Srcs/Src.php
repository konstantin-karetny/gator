<?php

namespace App\Services\Meme\Srcs;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Services\ClassMap;
use App\Services\Meme\Meme as MemeMemeService;

abstract class Src
{
    public function __construct()
    {
        foreach (
            MemeSrcModel::where('alias', ClassMap::getAlias($this))
                ->first()
                ->getAttributes() as $k => $v
        ) {
            $this->$k = $v;
        }
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

    public function store(MemeMemeModel $model): MemeMemeModel
    {
        return (new MemeMemeService())->store($model->getAttributes());
    }
}
