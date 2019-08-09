<?php

namespace App\Services\Meme;

use App\Services\CrudService;

class Src extends CrudService
{
    public function getValidationRules(array $data): array
    {
        $id = $data['id'];
        return [
            'alias'                  => 'required|alpha_dash|min:3|max:255|unique:srcs,alias,' . $id,
            'id'                     => 'integer',
            'favicon'                => 'required|url|min:5|max:255',
            'filter_min_votes'       => 'required|integer',
            'name'                   => 'required|string|min:3|max:255|unique:srcs,name,' . $id,
            'request_items_quantity' => 'required|integer',
            'url'                    => 'required|url|min:5|max:255|unique:srcs,url,' . $id,
            'user_id'                => 'required|integer'
        ];
    }
}
