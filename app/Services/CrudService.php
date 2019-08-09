<?php

namespace App\Services;

use App\Lib\ClassMap;
use App\Models\Model;
use App\Services\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Validator;

class CrudService extends Service
{
    public function delete(Model $model): bool
    {
        return (bool) ClassMap::getModelName($this)::findOrNew($model->getKey())->delete();
    }

    public function getValidationRules(array $data): array
    {
        return [];
    }

    public function prepareDataForStore(array $data): array
    {
        $user = request()->user();
        return
            array_merge(
                $data,
                [
                    'user_id' => $user ? $user->getKey() : 0
                ]
            );
    }

    public function store(array $data): Model
    {
        $data_valid = $this->validate($this->prepareDataForStore($data));
        $key_name   = ClassMap::getModel($this)->getKeyName();
        $model      = ClassMap::getModelName($this)::findOrNew($data_valid[$key_name]);
        $model->fill(Arr::except($data_valid, $key_name));
        $model->save();
        return $model;
    }

    public function validate(array $data): array
    {
        return
            Validator::make(
                $data,
                $this->getValidationRules($data)
            )->validated();
    }
}
