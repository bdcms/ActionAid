<?php

namespace App\Http\Middleware;

use Closure;

class onlyHopp
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
        if(session()->get('roleId') == '11'){
            return $next($request);
        }else{
         return redirect()->back()->with(['class' => 'danger','msg'=>'Sorry! You are not access on that area.']);
        } 
    }
}
