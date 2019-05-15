<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SrcStore extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'  => 'required|string|unique:srcs|min:3|max:255',
            'alias' => 'required|alpha_dash|unique:srcs|min:3|max:255'
        ];
    }
}
