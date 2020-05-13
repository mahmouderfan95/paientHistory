<?php

namespace App\Http\Middleware;

use Closure;

class is_lab
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
        if(Auth::guard('lab')->user()['role'] == 'labs'){
            return $next($request);
        }
        return redirect()->route('indexRoute');

    }
}
