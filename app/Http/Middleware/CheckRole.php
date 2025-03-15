<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string $role
     * @return mixed
     */

    public function handle(Request $request, Closure $next, $role)
    {
        if (!$request->user()->hashRole($role)) {
            //Redirect
        }
        return $next($request);
    }
}
