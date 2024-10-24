<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', function () {
    return view('welcome');
});


Route::resource('books', BookController::class);


Route::get('/hello/{username}', function ($username) {
    return "Hello, $username!";
});


Route::resource('books', BookController::class);


use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;

Route::resource('products', ProductController::class);
Route::resource('orders', OrderController::class);

