<?php

namespace App\Http\Middleware;

use Closure;
use App\board_detail;

class ConfirmBoardCode
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
    
     $get=board_detail::where('board_code',session('board_code'))->get();
   if(count($get)<1){
       return view('errors.404');
   }   
  
   return $next($request);
 
      
    }
}

