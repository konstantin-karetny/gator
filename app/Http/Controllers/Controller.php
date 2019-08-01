<?php

namespace App\Http\Controllers;

use App\Models\Model;
use App\Services\ClassMap;
use App\Services\Service;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected
        $alias  = '',
        $branch = '';

    public function __construct()
    {
        $this->alias  = ClassMap::getAlias($this);
        $this->branch = ClassMap::getBranch($this);
    }

    public function create()
    {
        return $this->edit(ClassMap::getModel($this));
    }

    public function destroy(Model $model)
    {
        $model->delete();
        return
            redirect()
                ->route($this->alias . '.index')
                ->with('msg', __('app.successfully_deleted'));
    }

    public function edit(Model $model)
    {
        return
            view(
                $this->alias . '.edit',
                [
                    'item' => $model
                ]
            );
    }

    public function index()
    {
        return
            view(
                $this->alias . '.index',
                [
                    'i'     => (request()->input('page', 1) - 1) * 5,
                    'items' => ClassMap::getModelName($this)::latest()->paginate(5)
                ]
            );
    }

    public function show(Model $model)
    {
        return
            view(
                $this->alias . '.show',
                [
                    'item' => $model
                ]
            );
    }

    public function store(Request $request)
    {
        ClassMap::getService($this)->store($request);
        return
            redirect()
                ->route($this->alias . '.index')
                ->with('msg', __('app.successfully_saved'));
    }

    public function update(Request $request)
    {
        return $this->store($request);
    }
}
