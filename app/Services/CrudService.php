<?php

namespace App\Services;

use App\Models\Model;
use App\Services\ClassMap;
use App\Services\Service;
use Illuminate\Http\Request;

class CrudService extends Service
{
    public function store(Request $request): Model
    {
        $request = $this->validate($request);
        $res     = ClassMap::getModelName($this)::findOrNew($request->input('id', 0));
        $res->fill(
            array_merge(
                $request->all(),
                [
                    'user_id' => $request->user()->getKey()
                ]
            )
        );
        $res->save();
        return $res;
    }

    public function validate(Request $request): Request
    {
        return $request;
    }
}
