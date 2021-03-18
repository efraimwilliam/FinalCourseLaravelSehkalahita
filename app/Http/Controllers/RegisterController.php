<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //register view
    public function registerpage(){
        return view('/Register');
    }

    //register logic
    public function register(Request $request){
        $registerakun = User::create([
            'name'=>$request->name,
            'username' =>$request->username, 
            'email' =>$request->email, 
            'password'=>Hash::make($request->password),
            'role_id'=>$request->role_id
        ]);

        return redirect('/auth');

    }
}
