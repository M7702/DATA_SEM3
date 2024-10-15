<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function index() {
        $user = User::all();


        return view('userindex',['userdata' => $user]);
    }


    public function pagination() {
        $user = User::paginate(2);


        return view('userpaginate',['userdata' => $user]);
    }

    

}
