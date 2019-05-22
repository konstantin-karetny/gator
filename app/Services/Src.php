<?php

namespace App\Services;

use App\Models\Src as SrcModel;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Src
{
    public function store(Request $request): SrcModel
    {
        $id = (int) $request->input('id', 0);
        $request->validate([
            'alias'            => 'required|alpha_dash|min:3|max:255|unique:srcs,alias,' . $id,
            'filter_min_votes' => 'required|integer',
            'name'             => 'required|string|min:3|max:255|unique:srcs,name,' . $id,
            'url'              => 'required|url|min:3|max:255|unique:srcs,url,' . $id
        ]);
        $res = new SrcModel();
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
}