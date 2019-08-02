<?php

namespace App\Services\Meme;

use App\Services\CrudService;
use Illuminate\Http\Request;

class Src extends CrudService
{
    public function validate(Request $request): Request
    {
        $id = (int) $request->input('id', 0);
        $request->validate([
            'alias'            => 'required|alpha_dash|min:3|max:255|unique:srcs,alias,' . $id,
            'filter_min_votes' => 'required|integer',
            'name'             => 'required|string|min:3|max:255|unique:srcs,name,' . $id,
            'url'              => 'required|url|min:5|max:255|unique:srcs,url,' . $id
        ]);
        return $request;
    }
}
