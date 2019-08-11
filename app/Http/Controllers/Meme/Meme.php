<?php

namespace App\Http\Controllers\Meme;

use App\Http\Controllers\CrudController;
use App\Lib\ClassMap;
use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Meme\Src as MemeSrcModel;
use App\Models\Meme\Type as MemeTypeModel;
use App\Services\Meme\Meme as MemeMemeService;
use Illuminate\Http\Request;

class Meme extends CrudController
{
    public function dislike(Request $request)
    {
        return
            response()->json(
                (new MemeMemeService())->dislike(
                    MemeMemeModel::findOrFail($request->json('id'))
                )
            );
    }

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
                    'i'     => (request()->input('page', 1) - 1) * 20,
                    'items' => MemeMemeModel::latest()->paginate(20)
                ]
            );
    }

    public function like(Request $request)
    {
        return
            response()->json(
                (new MemeMemeService())->like(
                    MemeMemeModel::findOrFail($request->json('id'))
                )
            );
    }
}
