<?php

namespace App\Services;

use App\Lib\ClassMap;
use App\Models\Model;
use App\Services\Service;
use Illuminate\Http\Request;

class CrudService extends Service
{
    public function prepareDataForStore(array $data): array
    {
        return
            array_merge(
                $data,
                [
                    'user_id' => request()->user()->getKey()
                ]
            );
    }

    public function store(array $data): Model
    {
        $data = $this->validate($this->prepareDataForStore($data));
        $res  = ClassMap::getModelName($this)::findOrNew((int) $data['id']);
        $res->fill($data);
        $res->save();
        return $res;
    }

    public function validate(array $data): array
    {
        return $data;
    }
}
