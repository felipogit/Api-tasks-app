<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;
use Error;

class CreateUserService {
    public function execute(array $data) {
        $userFound = User:: firstWhere('email', $data['email']);
        if(!is_null($userFound)) {
           return throw new AppError('Email already exists!', 400);

        }
        return User::create($data);
    }
}
