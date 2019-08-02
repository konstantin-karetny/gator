<?php

namespace App\Services\Meme;

use App\Services\CrudService;
use Illuminate\Http\Request;

class Meme extends CrudService
{
    public function validate(Request $request): Request
    {
        $id = (int) $request->input('id', 0);
        $request->validate([
            'body'        => 'required|string|min:5|max:1000|unique:memes,body,' . $id,
            'description' => 'string|max:1000',
            'name'        => 'required|string|min:3|max:255|unique:memes,name,' . $id,
            'poster'      => 'string|min:5|max:255'
        ]);
        return $request;
    }
}
