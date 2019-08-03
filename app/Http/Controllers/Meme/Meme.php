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
                    'types' => MemeTypeModel::all()
                ]
            );
    }
}
