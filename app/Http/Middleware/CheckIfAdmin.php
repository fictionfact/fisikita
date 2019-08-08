<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckIfAdmin
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
        // echo "CHECK ADMIN";
        if(Auth::check()){
            return $next($request);
        }
        return redirect('/admin/login')->with('message', 'Please Login First!');
    }
}
