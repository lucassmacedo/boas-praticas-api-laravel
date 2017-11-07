<?php

namespace App\Http\Requests;

use Dingo\Api\Http\FormRequest;

class FilmRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'slug' => 'required|unique:films|max:255',
            'release' => 'required',
            'locale' => 'required',
            'duration' => 'required',
            'sinopse' => 'required',
            'cover' => 'required',
        ];
    }
}
