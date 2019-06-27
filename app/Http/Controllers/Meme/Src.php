<?php

namespace App\Http\Controllers\Meme;

use App\Http\Controllers\Controller;
use App\Models\Meme\Src as MemeSrcModel;
use App\Http\Requests\SrcStore as SrcStoreRequest;
use App\Services\Meme\Src as MemeSrcService;
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
                    'items' => MemeSrcModel::latest()->paginate(5)
                ]
            );
    }

    public function create()
    {
        return $this->edit(new MemeSrcModel());
    }

    public function store(Request $request)
    {
        (new MemeSrcService())->store($request);
        return redirect()->route($this->alias . '.index')
                        ->with('msg', __('app.successfully_saved'));
    }

    public function show(MemeSrcModel $src)
    {
        return view($this->alias . '.show', ['item' => $src]);
    }

    public function edit(MemeSrcModel $src)
    {
        return view($this->alias . '.edit', ['item' => $src]);
    }

    public function update(Request $request)
    {
        (new MemeSrcService())->store($request);
        return redirect()->route($this->alias . '.index')
                        ->with('msg', __('app.successfully_saved'));
    }

    public function destroy(MemeSrcModel $src)
    {
        $src->delete();
        return redirect()->route($this->alias . '.index')
                        ->with('msg', __('app.successfully_deleted'));
    }
}
