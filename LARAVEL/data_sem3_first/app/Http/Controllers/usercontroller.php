<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

class usercontroller extends Controller
{

    public function listing()
    {
        $userdata = User::get(); // get all data from user table

        return view('listing', ['users' => $userdata]); // pass data to view
    }



    public function pagination()
    {
        $userdata = User::paginate(2); // get all data from user table with pagination

        return view('pagination', ['users' => $userdata]);
    }


    public function insert(Request $request)
    { // get data from form and save in request object
        //dd($request -> all ()); // display all data from form

        $user = User::create([ // insert data into user table
            'name' => $request->name, // get name from form
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('userlisting'); // redirect to listing page
    }


    //for edit
    public function edit(Request $request) //get id from listing page
    {
        $edit_id = $request->edit_id; // 
        $select = User::where('id', '=', $edit_id)->first(); // get data from user table where id = edit_id
        return view('edit', ['edituserdata' => $select]); // pass data to edit page
    }

    //for update
    // public function updateuser(Request $request){
    //     $user = User::find($request->id);

    //     $user->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => $request->password_get_info
    //     ]);
    //     return redirect()->route('userlisting');
    // }
    public function updateuser(Request $request) // get data from form
    {
        $user = User::find($request->id); // get id from form

        // Prepare the update data
        $dataToUpdate = [
            'name' => $request->name, // get name from form
            'email' => $request->email,
        ];

        // Check if password is filled, only then hash and update
        if ($request->password) {
            $dataToUpdate['password'] = Hash::make($request->password); // get password from form  and hash it
        }

        $user->update($dataToUpdate); // update data into user table

        return redirect()->route('userlisting'); // Make sure this route matches your listing route
    }


    //for delete
    public function delete(Request $request) // get id from listing page
    {
        $delete_id = $request->delete_id; // get id from form
        $user = User::find($delete_id); // get data from user table where id = delete_id
        $user->delete(); // delete data from user table
        return redirect()->route('userlisting');
    }
}
