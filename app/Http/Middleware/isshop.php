<?php

namespace App\Http\Middleware;

use App\boutique;
use Closure;

class isshop
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
        $store=boutique::where("slug","=",$request->slug)->first();
        if ($store==null){
            abort(500);
        }
        return $next($request);
    }
}
