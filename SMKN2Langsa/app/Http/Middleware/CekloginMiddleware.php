<?php

namespace App\Http\Middleware;

use Closure;

class CekloginMiddleware
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
        if(!session('berhasil_login')){
            return redirect('/login');
        }
        return $next($request);
    }
}
