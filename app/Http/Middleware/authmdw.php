<?php

namespace App\Http\Middleware;

use Closure;

class authmdw
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
        if (Auth::check()){
            if (Auth::user()->role_id!=3){
                return redirect('admin/login');
            }
        }else{
            return redirect('admin/login');
        }
        return $next($request);
    }
}