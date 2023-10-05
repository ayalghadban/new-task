<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class UserRequest extends BaseRequest
{

    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2|max:30',
            'email' => 'required|string|min:2',
            'password' => 'required|string|min:6',
        ];
    }
}
