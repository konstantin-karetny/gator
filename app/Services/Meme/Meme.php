<?php

namespace App\Services\Meme;

use App\Services\CrudService;
use Illuminate\Http\Request;

class Meme extends CrudService
{
    public function prepareRequest(Request $request): Request
    {
        $request = parent::prepareRequest($request);
        $request->request->add([
            'added' => $request->input('added', false)
        ]);
        return $request;
    }

    public function validate(Request $request): Request
    {
        $id = (int) $request->input('id', 0);
        $request->validate([
            'added'       => 'required|boolean',
            'body'        => 'required|string|min:5|max:1000|unique:memes,body,' . $id,
            'description' => 'string|max:1000',
            'name'        => 'required|string|min:3|max:255|unique:memes,name,' . $id,
            'original_id' => 'required|string',
            'poster'      => 'string|min:5|max:255',
            'src_id'      => 'required|integer',
            'type_id'     => 'required|integer'
        ]);
        return $request;
    }
}
