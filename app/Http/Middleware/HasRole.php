<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Facades\Auth;

class HasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next, ...$roles)
    {

        if (in_array(Auth::user()->getRole->role, $roles)) {
            return $next($request);
        }

        throw new AuthenticationException('Unauthenticated.');

    }
}