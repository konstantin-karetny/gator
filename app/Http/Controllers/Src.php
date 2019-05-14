<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Src as SrcModel;
use Illuminate\Http\Request;

class Src extends Controller
{
    public function index()
    {
        $items = SrcModel::latest()->paginate(5);
        return view($this->alias . '.index',compact('srcs'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return $this->edit(new SrcModel());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        SrcModel::create($request->all());
        return redirect()->route($this->alias . '.index')
                        ->with('success','SrcModel created successfully.');
    }

    public function show(SrcModel $item)
    {
        return view($this->alias . '.show', ['item' => $item]);
    }

    public function edit(SrcModel $item)
    {
        return view($this->alias . '.edit', ['item' => $item]);
    }

    public function update(Request $request, SrcModel $item)
    {
        $request->validate([
            'name' => 'required',
            'detail' => 'required',
        ]);
        $item->update($request->all());
        return redirect()->route($this->alias . '.index')
                        ->with('success','SrcModel updated successfully');
    }

    public function destroy(SrcModel $item)
    {
        $item->delete();
        return redirect()->route($this->alias . '.index')
                        ->with('success','SrcModel deleted successfully');
    }
}
