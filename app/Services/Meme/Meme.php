<?php

namespace App\Services\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Models\Model;
use App\Services\CrudService;
use App\Services\Meme\Files as MemeFilesService;

class Meme extends CrudService
{
    public function delete(Model $model): bool
    {
        return (new MemeFilesService($model))->delete() && $model->delete();
    }

    public function getValidationRules(array $data): array
    {
        $id = $data['id'];
        return [
            'added'       => 'required|boolean',
            'body'        => 'required|string|min:5|max:1000|unique:memes,body,' . $id,
            'description' => 'string|max:1000',
            'id'          => 'integer',
            'name'        => 'required|string|min:3|max:255|unique:memes,name,' . $id,
            'original_id' => 'required|string',
            'preview'     => 'string|min:5|max:255',
            'src_id'      => 'required|integer',
            'type_id'     => 'required|integer',
            'user_id'     => 'required|integer'
        ];
    }

    public function makePermanent(MemeMemeModel $model): bool
    {
        $model->added = true;
        return
            (new MemeFilesService($model))->store() &&
            $model->save();
    }

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
}
