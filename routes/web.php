<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks/create',function(){
    return view('tasks.create');
});

Route::post('/tasks/create',[TasksController::class, 'store']);