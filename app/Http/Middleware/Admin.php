<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
        // echo "CHECK ADMIN";
        // if(Auth::check()){
        // if (Auth()->check()) {
            return $next($request);
        // } else
        // return redirect('/coba');
        // return Auth::User();
    }
}
