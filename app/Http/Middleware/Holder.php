<?php

namespace App\Http\Middleware;

use Closure;

class Holder
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
        if (Auth::check() && Auth::user()->role == 'holder') {
            return $next($request);
        }
        else {
            return redirect('/admin');
        }
    }
}
