<?php

namespace App\Http\Requests\User;

use App\Http\Requests\BaseRequest;

class GetUserRequest extends BaseRequest
{
    public function rules(): array
    {
        return [
            'user_id' => 'required|integer|exists:users,id',
        ];
    }
}
