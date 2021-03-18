<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    //login page
    public function loginpage(){
        return view('/Auth');
    }

    //login logic
    public function login(Request $request){

        $credentials = $request->only(['username', 'password']);
        if(Auth::attempt($credentials)){
            return redirect('/');
        }
        return redirect('/Auth');
        //return response()->json('error');
        
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
