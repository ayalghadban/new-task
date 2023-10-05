<?php

namespace App\Http\Requests;


class ArticleRequest extends BaseRequest
{


    public function rules(): array
    {
        return
        [
            'user_id'=> 'required|integer|exists:users,id',
            'title' => 'required|string|min:3',
            'article' => 'required|string|min:10'
        ];
    }
}
