<?php

namespace App\Http\Middleware;

use Closure;

class PasswordrecoveryMiddleware
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
      $employee_no = $request->employee_no;
      $phone_no = $request->phone_no;

        return $next($request);
    }
}
