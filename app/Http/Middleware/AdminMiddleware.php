<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            $user_type = Auth::user()->user_type;
            if($user_type=='admin'){
                 return $next($request);
                // return redirect()->route('dashboard');
            }
            abort(403,'Unauthorized Access');
        }
        abort(403,'Unauthorized Access');
        // return $next($request);
    }
}
