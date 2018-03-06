<?php

namespace mywork\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class Manager
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
        // if (Auth::check()) 
        // {
        //     $user = Auth::user();
        //     if ($user->hasRole('manager')) 
        //     {
                return $next($request); 
        //     } else {
        //     return redirect('/login');
        //     }
        // }
        // else {
        //         return redirect('/home');
        //     }
        
        
    }
}

