<?php

namespace App\Services;

use App\Models\Src as SrcModel;

class Src
{
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|unique:srcs|min:3|max:255',
            'alias' => 'required|alpha_dash|unique:srcs|min:3|max:255'
        ]);
        die(var_dump($request->validated()));
        SrcModel::create($request->validated());
        return redirect()->route($this->alias . '.index')
                        ->with('success','SrcModel created successfully.');
    }
}