<?php

namespace App\Services;

use App\DTO\UserCreateData;

class UserService
{
    public function create(UserCreateData $data)
    {
        echo 'User successfully created:' . ' ' . $data->email;
        return true;
    }
}