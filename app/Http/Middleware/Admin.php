<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Auth::check()){
            return redirect()->route('login');
        }

        //roles 1 = admin
        if(Auth::user()->roles == 1){
            return $next($request);
        }

        //roles 2 = producteur
        if(Auth::user()->roles == 2){
            return redirect()->route('producteur');
        }

        //roles 3 = user
        if(Auth::user()->roles == 3){
            return redirect()->route('user');
        }
    }
}
