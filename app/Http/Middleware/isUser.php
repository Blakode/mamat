<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isUser
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
        if( auth()->check() && Auth()->user()->role === 'user'){
            return $next($request);
         }
         abort(403, "Admin Authorization Forbidden"); 
    }
}
