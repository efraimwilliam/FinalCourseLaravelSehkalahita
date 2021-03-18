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
            if(Auth::user()->role_id ==1){
                return redirect('/admin/a');

            }else if (Auth::user()->role_id==2){
                return redirect('/user/a');
            }

           return redirect('/');
        }

        return redirect('/auth');
        
    }
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/auth');
    }
}
