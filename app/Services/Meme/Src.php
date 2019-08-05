<?php

namespace App\Services\Meme;

use App\Services\CrudService;
use Illuminate\Support\Facades\Validator;

class Src extends CrudService
{
    public function validate(array $data): array
    {
        $id        = (int) $data['id'];
        $validator = Validator::make(
            $data,
            [
                'alias'            => 'required|alpha_dash|min:3|max:255|unique:srcs,alias,' . $id,
                'id'               => 'integer',
                'favicon'          => 'required|url|min:5|max:255',
                'filter_min_votes' => 'required|integer',
                'name'             => 'required|string|min:3|max:255|unique:srcs,name,' . $id,
                'url'              => 'required|url|min:5|max:255|unique:srcs,url,' . $id
            ]
        );
        if ($validator->errors()->all()) {
            throw new Exception('Validaton failed');
        }
        return $validator->validated();
    }
}
