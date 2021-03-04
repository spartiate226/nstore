<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role)
    {
        if (Auth::check()){
            if (Auth::user()->role_id!=$role){
                return redirect('admin/login');
            }
        }else{
            return redirect('admin/login');
        }
        return $next($request);
    }
}
