<?php

namespace App\Http\Middleware;

use Closure;
use DB;
use Auth;
class CheckExamIsDone
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
        $get=DB::table('exams_details')->
        where([['users_id',Auth::user()->id],['course',json_decode(DB::table('admintables')->
            pluck('live_course'),1)[0]]])->
        first();

        if(count($get)<1){
             return $next($request);
        }
        else{
            exit(view('exams.examisdonebefore',compact('get')));
        }
       
    }
}
