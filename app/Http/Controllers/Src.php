<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Src as SrcModel;
use App\Http\Requests\SrcStore as SrcStoreRequest;
use App\Services\Src as SrcService;
use Illuminate\Http\Request;

class Src extends Controller
{
    public function index()
    {
        return
            view(
                $this->alias . '.index',
                [
                    'i'     => (request()->input('page', 1) - 1) * 5,
                    'items' => SrcModel::latest()->paginate(5)
                ]
            );
    }

    public function create()
    {
        return $this->edit(new SrcModel());
    }

    public function store(Request $request)
    {
        (new SrcService())->store($request);
        return redirect()->route($this->alias . '.index')
                        ->with('msg', __('app.successfully_saved'));
    }

    public function show(SrcModel $src)
    {
        return view($this->alias . '.show', ['item' => $src]);
    }

    public function edit(SrcModel $src)
    {
        return view($this->alias . '.edit', ['item' => $src]);
    }

    public function update(Request $request)
    {
        (new SrcService())->store($request);
        return redirect()->route($this->alias . '.index')
                        ->with('msg', __('app.successfully_saved'));
    }

    public function destroy(SrcModel $src)
    {
        $src->delete();
        return redirect()->route($this->alias . '.index')
                        ->with('msg', __('app.successfully_deleted'));
    }
}
