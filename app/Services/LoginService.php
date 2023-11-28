<?php

namespace App\Services;

use App\Exceptions\AppError;
use App\Models\User;
use Error;
use Illuminate\Support\Facades\Log;

class LoginService {
    public function execute(array $data) {
        Log::debug('Login Service');

        if( !$token = auth()->attempt($data)) {
            throw new AppError('Invalid passwords or email!', 401);
        }

        return $this->responseToken($token);
    }

    private function responseToken($token) {
        return response()->json([
            'token' => $token,
            'user' => auth()->user()
        ]);
    }
}
