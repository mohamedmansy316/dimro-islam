<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isAdmin
{

    public function handle(Request $request, Closure $next){
        if(auth()->check()){
            if(auth()->user()->role == 1 && auth()->user()->active == 1){
                return $next($request);
            }else{
                abort(404);
            }
        }else{
            return redirect()->route('login.get');
        }
    }
}
