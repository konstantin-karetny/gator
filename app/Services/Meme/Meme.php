<?php

namespace App\Services\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Model;
use App\Services\CrudService;

class Meme extends CrudService
{
    public function getValidationRules(array $data): array
    {
        $id = $data['id'];
        return [
            'body'        => 'required|string|min:5|max:1000|unique:memes,body,' . $id,
            'description' => 'string|max:1000',
            'id'          => 'integer',
            'name'        => 'required|string|min:3|max:255|unique:memes,name,' . $id,
            'original_id' => 'required|string',
            'permanent'   => 'required|boolean',
            'preview'     => 'string|min:5|max:255',
            'src_id'      => 'required|integer',
            'type_id'     => 'required|integer',
            'user_id'     => 'required|integer'
        ];
    }

    public function prepareDataForStore(array $data): array
    {
        return
            array_merge(
                parent::prepareDataForStore($data),
                [
                    'permanent'       => (bool)   $data['permanent'],
                    'description' => (string) $data['description']
                ]
            );
    }
}
