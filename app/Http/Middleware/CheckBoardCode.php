<?php

namespace App\Http\Middleware;

use Closure;

class CheckBoardCode
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
     if($request->route()->parameter('board_code')!==null){
        session(['board_code'=>$request->route()->parameter('board_code')]);
        

    return  redirect(url('boards'));
    }
    elseif (session('board_code')!==null) {
        return $next($request);

    }
        return $next($request);
    }
}
