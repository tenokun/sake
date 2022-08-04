<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'post.name' => 'required|string|max:100',
            'post.kind' => 'required|string|max:4000',
            'post.body' => 'required|string|max:4000',
        ];
    }
}
