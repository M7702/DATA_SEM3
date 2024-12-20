<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteAction;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user', [UserController::class, 'index']);

Route::get('/user/pagination', [UserController::class, 'pagination']);





