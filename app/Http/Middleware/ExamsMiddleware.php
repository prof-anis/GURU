<?php

namespace App\Http\Middleware;

use Closure;

class ExamsMiddleware
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

         if($request->all()['course_mode_'. $request->route()->parameters()['course']]=='' || $request->all()['course_mode_'. $request->route()->parameters()['course']]==null){
            return view('errors.404');
        }
        return $next($request);
    }
}
