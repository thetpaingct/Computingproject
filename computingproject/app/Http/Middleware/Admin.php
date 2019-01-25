<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//         if(Auth::guard()->check()){

//          return $next($request);
        
//         }
        
// return redirect('login');


if(Auth::guard()->check()){

if(Auth::user()->role_id == 1){
        return $next($request);
     
    }
     
        }
return redirect('login');


    }
}
