<?php

namespace App\Services\Meme;

use App\Services\CrudService;
use Exception;
use Illuminate\Support\Facades\Validator;

class Meme extends CrudService
{
    public function prepareDataForStore(array $data): array
    {
        return
            array_merge(
                parent::prepareDataForStore($data),
                [
                    'added'       => (bool)   $data['added'],
                    'description' => (string) $data['description']
                ]
            );
    }

    public function validate(array $data): array
    {
        $id        = (int) $data['id'];
        $validator = Validator::make(
            $data,
            [
                'added'       => 'required|boolean',
                'body'        => 'required|string|min:5|max:1000|unique:memes,body,' . $id,
                'description' => 'string|max:1000',
                'id'          => 'integer',
                'name'        => 'required|string|min:3|max:255|unique:memes,name,' . $id,
                'original_id' => 'required|string',
                'poster'      => 'string|min:5|max:255',
                'src_id'      => 'required|integer',
                'type_id'     => 'required|integer',
                'user_id'     => 'required|integer'
            ]
        );
        if ($validator->errors()->all()) {
            throw new Exception('Validaton failed: ' . implode(', ', $validator->errors()->all()));
        }
        return $validator->validated();
    }
}
