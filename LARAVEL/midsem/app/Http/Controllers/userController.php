<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator; //for inbuilt message for validation
use Illuminate\Support\Facades\Log; // for logging errors

class userController extends Controller
{
    public function listing()
    {

       $userdata = User::get();
      //    return $userdata;

      return view('userlisting', ['users' => $userdata]);
   }
    public function listingPagination(){
  
      $userdata = User::paginate(2);
      
      return view('userlistingpagination',['userpage'=>$userdata]);

    }

    // public function insert(Request $request)//get & post form data get in Request parameter
    // {
    //   $user = User::create([
    //     'name' => (!empty($request->name)) ? $request->name:'no name',  
    //     'email' => ($request->email!="")?$request->email:'no email',
    //     'password' =>(!empty($request->password)) ? $request->password:'admin@123',
    //   ]);
      
    //   return redirect()->route('userlisting');
    // }

    public function insert(Request $request)
    {
        // Define validation rules
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
        ];
        $messages = [
          'name.required' => 'Please enter your name.',
          'email.required'=>'please enter  email',
          'email.email' => 'Please provide a valid email address.',
          'password.min' => 'Password must be at least 8 characters long.',
      ];
        // Create a validator instance with the request data and rules
        $validator = Validator::make($request->all(), $rules,$messages);

        // Check if validation fails
        if ($validator->fails()) {
            // Redirect back with input and error messages
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Create the user if validation passes
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Encrypt password
        ]);

        // Redirect to user listing with a success message
        return redirect()->route('userlisting')->with('success', 'User created successfully.');
    }

    public function delete(Request $request){
      $delete_id = $request->delete_id;
      
      $user = User::findOrFail($delete_id);
      $user->delete();
      return redirect()->route('userlisting');
      
    }
//     public function edit(Request $request){
//       $edit_id = $request->edit_id;
//       // dd($edit_id);
//       // if there is one user we will use first instead of get
//     //  $select=User::where('id','=',$edit_id)->get();
//       // dd($select['0']->email);
//      $select=User::where('id','=',$edit_id)->first(); 
//         // dd($select);
//       return view('edit',['edituserdata'=>$select]);


// }
public function edit(Request $request){
  try {
      $edit_id = $request->input('edit_id'); // Changed to input() for consistency
      $select = User::find($edit_id);

      if (!$select) {
        Log::error('Error in edit method-user not found');
          return redirect()->back()->withErrors('User not found.');
      }

      return view('edit', ['edituserdata' => $select]);

  } catch (\Exception $e) {
      // Log the exception for further investigation
      Log::error('Error in edit method: ' . $e->getMessage());

      // Redirect to a safe page with an error message
      return redirect()->back()->withErrors('An unexpected error occurred.');
  }
}


  public function updateuser(Request $request){
    $user = User::find($request->id);

    $user->update([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => $request->input('password'),
  ]);

   return redirect()->route('userlisting');
     
  }

}
  
