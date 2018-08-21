<?php

namespace App\Http\Middleware;

use Closure;

class checkAuth
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
        if(!session()->get('userId')){
            return redirect('/')->with(['class' => 'danger','msg'=>'You are not access that area. Please try to login first.']);
        }
        return $next($request);
    }
}
