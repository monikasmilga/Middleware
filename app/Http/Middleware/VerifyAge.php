<?php

namespace App\Http\Middleware;

use Closure;

class VerifyAge
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
        if(auth()->user()->age > 18)
          return $next($request);

        abort (403, 'Access denied');
        //return $next($request);
    }
}
