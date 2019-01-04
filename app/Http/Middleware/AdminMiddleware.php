<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use Auth;
use App\User;

class AdminMiddleware
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
        if ($request->user()->isAdmin != '1')
        {

            return redirect()->back();
        }

        return $next($request);
    }
}
