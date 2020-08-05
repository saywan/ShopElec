<?php

namespace App\Http\Middleware;

use Closure;

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
        $this->auth=auth()->user() ? (auth()->user()->role === 'Admin') : false;

        //pass request if
        if($this->auth === true)
            return $next($request);

        return redirect()->route('login')->with('error','Access Denied. Login to Continue');

    }
}
