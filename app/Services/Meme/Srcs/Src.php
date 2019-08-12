<?php

namespace App\Services\Meme\Srcs;

use App\Lib\ClassMap;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Services\Meme\Meme as MemeMemeService;

abstract class Src
{
    protected $model = null;

    public function __construct()
    {
        $this->model = MemeSrcModel::where('alias', ClassMap::getAlias($this))->first();
    }

    public function delete(MemeMemeModel $meme): bool
    {
        return (new MemeMemeService())->delete($meme);
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

    public function makePermanent(MemeMemeModel $meme): bool
    {
        $meme->permanent = true;
        return (bool) $meme->save();
    }

    public function requestItems(int $quantity): array
    {
        return [];
    }

    public function store(MemeMemeModel $meme): MemeMemeModel
    {
        return (new MemeMemeService())->store($meme->getAttributes());
    }

    public function whetherToAdd(MemeMemeModel $meme): bool
    {
        return
            MemeMemeModel::where([
                'src_id'      => $meme->src_id,
                'original_id' => $meme->original_id
            ])->doesntExist();
    }

    public function whetherToDelete(MemeMemeModel $meme): bool
    {
        return $meme->likes->isEmpty();
    }
}
