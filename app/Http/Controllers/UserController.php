<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;



class UserController extends Controller
{
    
    public function create()
    {
         return view('register');
    }

   

   
    public function store(StoreUserRequest $request)
{
    $request->validated();
    
        // then insert 
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        if ($user->save())
        return redirect('/flowers')->with('message', 'You registered successfully.');
    else
        return redirect('/flowers')->with('error', 'Problem during register. Try again');
}


    }

   
   

