<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTaskRequest;
use App\Services\CreateTaskService;


class TasksController extends Controller {
    public function create(CreateTaskRequest $request) {
       $createTaskService = new CreateTaskService();
       return $createTaskService->execute($request->all());
    }
}
