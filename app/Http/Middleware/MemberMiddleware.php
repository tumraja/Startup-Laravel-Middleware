<?php

namespace App\Http\Middleware;

use Closure;

class MemberMiddleware
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
        /**
         * If the user isAdmin or isSuperAdmin or isMember
         */
        if ($request->user() && ($request->user()->ability == 'isMember') || $request->user()->ability == 'isAdmin')
            return redirect('/message');

        return $next($request);
    }
}
