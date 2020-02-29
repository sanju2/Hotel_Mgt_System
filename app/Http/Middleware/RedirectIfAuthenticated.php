<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    
    public function handle($request, Closure $next, $guard = null)
    {
        /*if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }*/
        switch ($guard) {
            case 'admin':
                if (Auth::guard($guard)->check()) {
                    return redirect()->route('admin.dashboard');
                }
                break;
            
            default:
                if (Auth::guard($guard)->check()) {
                return redirect('/home');
             }
                break;
        }

        return $next($request);
    }
}
