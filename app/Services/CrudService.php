<?php

namespace App\Services;

use App\Models\Model;
use App\Services\ClassMap;
use App\Services\Service;
use Illuminate\Http\Request;

class CrudService extends Service
{
    public function prepareRequest(Request $request): Request
    {
        $request->request->add([
            'user_id' => $request->user()->getKey()
        ]);
        return $request;
    }

    public function store(Request $request): Model
    {
        $request = $this->validate($request);
        $model   = ClassMap::getModelName($this)::findOrNew($request->input('id', 0));
        $model->fill($request->all());
        $model->save();
        return $model;
    }

    public function validate(Request $request): Request
    {
        return $request;
    }
}
