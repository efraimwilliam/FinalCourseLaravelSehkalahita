<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class AuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle(Request $request, Closure $next, $role_id)
    {

        if(Auth::user()!=null){
            if(Auth::user()->username!=null){
                if(Auth::user()->role_id==1){
                    //return $next($request);
                    //return abort(403);
                    return redirect('/admin/a');
                }else if(Auth::user()->role_id==2){
                    return $next($request);
                }
                return redirect('/auth');   
            }
            //else
            return redirect('/');
        }
       return redirect('auth');
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
