<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\productcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/userlisting',[userController::class,'listing'])->name('userlisting');

Route::get('/userpagination',[userController::class,'listingPagination']);
Route::post('/usersearch',[userController::class,'search']);

// insert

Route::get('/insert', function () { return view('insert');});
Route::post('/insertdata',[userController::class,'insert'])->name('insertdata');

// userdelete
Route::get('/delete',[userController::class,'delete'])->name('delete');

// useredit
Route::get('/edit',[userController::class,'edit'])->name('edit');
Route::post('/edit-user',[userController::class,'updateuser'])->name('editdata');

//productcontroller
Route::get('/productview',[productcontroller::class,'index']);
Route::get('/productinsert',[productcontroller::class,'create']);
Route::post('/products', [ProductController::class, 'store'])->name('product.store');

Route::get('/products/{id}', [ProductController::class, 'show'])->name('product.show');

Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');

Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
