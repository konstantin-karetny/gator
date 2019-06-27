<?php

namespace App\Services\Meme;

use App\Models\Meme\Src as MemeSrcModel;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Src extends Service
{
    public function store(Request $request): MemeSrcModel
    {
        $request = $this->validate($request);
        $res     = MemeSrcModel::findOrNew($request->input('id', 0));
        $res->update(
            array_merge(
                $request->all(),
                [
                    'user_id' => $request->user()->id
                ]
            )
        );
        return $res;
    }

    public function validate(Request $request): Request
    {
        $id = (int) $request->input('id', 0);
        $request->validate([
            'alias'            => 'required|alpha_dash|min:3|max:255|unique:srcs,alias,' . $id,
            'filter_min_votes' => 'required|integer',
            'name'             => 'required|string|min:3|max:255|unique:srcs,name,' . $id,
            'url'              => 'required|url|min:3|max:255|unique:srcs,url,' . $id
        ]);
        return $request;
    }
}
