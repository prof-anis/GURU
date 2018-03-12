<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkIfAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {  //dd(Auth::user()->name!=='admin');
        if(Auth::user()->name=='admin'){
          return $next($request);
        }
        else{
            //return view('errors.404');
            exit(view('errors.404'));
             
        }
       // my_sim
        
    }
}
