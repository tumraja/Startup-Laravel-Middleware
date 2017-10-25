<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\AuthenticationException;

class AdminMiddleware
{
    /**
     * @var array
     */
    protected $ability = ['ADMIN', 'SUPER_ADMIN'];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $this->isAdmin($request->user()->ability);

        return $next($request);
    }

    /**
     * Determine if the user is ADMIN or SUPER_ADMIN.
     *
     * @param $user_ability
     */
    public function isAdmin($user_ability)
    {
        if (!in_array($user_ability, $this->ability))
        {
            throw new AuthenticationException('Unauthenticated.');
        }
    }
}
