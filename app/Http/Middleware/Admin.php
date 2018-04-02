<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Access\AuthorizationException;

class Admin
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
        if (! optional($request->user())->isAdmin()){

           // return response()->view('forbidden',[],403);
            throw new AuthorizationException;

        }
        return $next($request);
    }
}
