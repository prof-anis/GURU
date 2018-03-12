<?php

namespace App\Http\Middleware;

use Closure;

class NextAfterCreateGroup
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
        $responce = $next($request);
        return view('discussion.discussionboard');
    }
}
