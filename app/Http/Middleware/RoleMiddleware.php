<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {
        if($role== 'admin'){
            $roleid = Auth::user()->role_id;
            if($roleid !=1 ){
                return abort(403);
            }
        }

        if($role== 'user'){
            $roleid = Auth::user()->role_id;
            if($roleid !=2 ){
                return abort(403);
            }
        }
        return $next($request);
    }
}
