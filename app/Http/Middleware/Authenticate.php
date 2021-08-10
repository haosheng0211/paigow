<?php

namespace App\Http\Middleware;

use App\Traits\ApiResponse;
use Closure;
use Illuminate\Contracts\Auth\Factory as Auth;
use Illuminate\Http\Request;

class Authenticate
{
    use ApiResponse;

    /**
     * The authentication guard factory instance.
     *
     * @var Auth
     */
    protected Auth $auth;

    /**
     * Create a new middleware instance.
     *
     * @param  Auth  $auth
     *
     * @return void
     */
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  Request      $request
     * @param  Closure      $next
     * @param  string|null  $guard
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $guard = null)
    {
        if ($this->auth->guard($guard)->guest()) {
            return $this->responseWithError(trans('auth.unauthorized'), 401);
        }

        return $next($request);
    }
}
