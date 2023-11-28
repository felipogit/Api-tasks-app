<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUseerRequest;
use App\Models\User;
use App\Services\CreateUserService;
use Illuminate\Http\Request;


class UserController extends Controller {
    public function create(CreateUseerRequest $request) {
       $createUserService = new CreateUserService();
       return $createUserService->execute($request->all());
    }
}
