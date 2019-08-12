<?php

namespace App\Services\Meme;

use App\Models\Model;
use App\Services\CrudService;
use Illuminate\Support\Arr;

class Src extends CrudService
{
    public function getValidationRules(array $data): array
    {
        $id = $data['id'];
        return [
            'alias'                  => 'required|alpha_dash|min:3|max:255|unique:srcs,alias,' . $id,
            'id'                     => 'integer',
            'item_url_prefix'        => 'required|url|min:5|max:255',
            'logo'                   => 'required|image|mimes:' . config('app.meme.src.logo_extension'),
            'filter_min_votes'       => 'required|integer',
            'name'                   => 'required|string|min:3|max:255|unique:srcs,name,' . $id,
            'request_items_quantity' => 'required|integer',
            'url'                    => 'required|url|min:5|max:255|unique:srcs,url,' . $id,
            'user_id'                => 'required|integer'
        ];
    }

    public function store(array $data): Model
    {
        $src = parent::store(Arr::except($data, 'logo'));
        if ($data['logo']) {
            $pathinfo = pathinfo($src->logo_path);
            $data['logo']->storeAs(
                $pathinfo['dirname'],
                $pathinfo['basename'],
                'public'
            );
        }
        return $src;
    }
}
