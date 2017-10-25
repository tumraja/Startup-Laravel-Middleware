<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\AuthenticationException;

class MemberMiddleware
{
    /**
     * @var array
     */
    protected $ability = ['ADMIN', 'SUPER_ADMIN', 'MEMBER'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->isMember($request->user()->ability);

        return $next($request);
    }

    /**
     * Determine if the user is MEMBER, ADMIN or SUPER_ADMIN.
     *
     * @param $ability
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function isMember($ability)
    {
        if (!in_array($ability, $this->ability))
        {
            Auth::logout();

            throw new AuthenticationException('Unauthenticated.');
        }
    }
}
