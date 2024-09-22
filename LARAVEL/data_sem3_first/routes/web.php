<?php

use App\Http\Controllers\usercontroller;
use Illuminate\Support\Facades\Route;

// ******
// Route::get('url_name',function(){
//     return view('view_name');
// });


Route::get('/', function () {
    return view('welcome');
});


Route::get('/listing',[usercontroller::class, 'listing']) -> name('userlisting'); 
// call listing function from usercontroller class and give name to route



Route::get('/pagination',[usercontroller::class,'pagination']); // call pagination function from usercontroller class and give name to route



Route::get('/insert', function () {
    return view('insert');
}); // return insert view

Route::post('/insert',[usercontroller::class, 'insert']) -> name('insertdata'); // call insert function from usercontroller class and give name to route




//userdelete
Route::get('/delete',[usercontroller::class,'delete'])->name('delete'); // call delete function from usercontroller class and give name to route



//useredit

Route::get('/edit',[usercontroller::class,'edit'])->name('edit'); // call edit function from usercontroller class and give name to route
Route::post('/edit-user',[usercontroller::class,'updateuser'])->name('editdata'); // call updateuser function from usercontroller class and give name to route




