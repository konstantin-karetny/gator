<?php

namespace App\Http\Controllers\Meme;

use App\Http\Controllers\CrudController;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Models\Meme\Type as MemeTypeModel;
use App\Services\ClassMap;

class Meme extends CrudController
{
    public function edit(int $id)
    {
        return
            view(
                ClassMap::getViewName($this) . '.edit',
                [
                    'item'  => MemeMemeModel::findOrNew($id),
                    'srcs'  => MemeSrcModel::all(['id', 'name']),
                    'types' => MemeTypeModel::all(['id', 'alias'])
                ]
            );
    }

    public function indexFront()
    {
        return
            view(
                ClassMap::getViewName($this) . '.indexfront',
                [
                    'i'     => (request()->input('page', 1) - 1) * 5,
                    'items' => ClassMap::getModelName($this)::latest()->paginate(5),
                    'srcs'  => MemeSrcModel::all(['id', 'favicon'])->keyBy('id'),
                    'types' => MemeTypeModel::all(['id', 'alias'])->keyBy('id')
                ]
            );
    }
}
