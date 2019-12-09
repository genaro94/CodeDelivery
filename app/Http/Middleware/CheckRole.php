<?php

namespace codeDelivery\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class CheckRole
{
    public function handle($request, Closure $next)
    {
       if(!Auth::check()){
            return redirect('/login');
       }

       if(Auth::user()->role <> 'admin'){
       		return redirect('/login');
       }

       return $next($request);
    }
}
