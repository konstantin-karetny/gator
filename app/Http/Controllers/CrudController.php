<?php

namespace App\Http\Controllers;

use App\Models\Model;
use App\Services\ClassMap;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class CrudController extends Controller
{
    public function create()
    {
        return $this->edit(0);
    }

    public function destroy(int $id)
    {
        ClassMap::getModelName($this)::findOrNew($id)->delete();
        return
            redirect()
                ->route($this->getRouterAlias() . '.index')
                ->with('msg', __('app.successfully_deleted'));
    }

    public function edit(int $id)
    {
        return
            view(
                ClassMap::getViewName($this) . '.edit',
                [
                    'item' => ClassMap::getModelName($this)::findOrNew($id)
                ]
            );
    }

    public function getRouterAlias()
    {
        return Route::getRoutes()->getByName(ClassMap::getAlias($this) . '.index')->uri();
    }

    public function index()
    {
        return
            view(
                ClassMap::getViewName($this) . '.index',
                [
                    'i'     => (request()->input('page', 1) - 1) * 5,
                    'items' => ClassMap::getModelName($this)::latest()->paginate(5)
                ]
            );
    }

    public function show(int $id)
    {
        return
            view(
                ClassMap::getViewName($this) . '.show',
                [
                    'item' => ClassMap::getModelName($this)::findOrFail($id)
                ]
            );
    }

    public function store(Request $request)
    {
        ClassMap::getService($this)->store($request);
        return
            redirect()
                ->route($this->getRouterAlias() . '.index')
                ->with('msg', __('app.successfully_saved'));
    }

    public function update(Request $request)
    {
        return $this->store($request);
    }
}
