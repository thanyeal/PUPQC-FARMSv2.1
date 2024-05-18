<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string ...$guards): Response
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                if (Auth::user()->role_id == 1) {
                    return redirect()->intended(RouteServiceProvider::AcadHead);
                }
                elseif (Auth::user()->role_id == 2) {
                    return redirect()->intended(RouteServiceProvider::Regular);
                }
                elseif (Auth::user()->role_id == 3) {
                    return redirect()->intended(RouteServiceProvider::Parttime);
                }
                elseif (Auth::user()->role_id == 4) {
                    return redirect()->intended(RouteServiceProvider::AcadStaff);
                }
                elseif (Auth::user()->role_id == 5) {
                    return redirect()->intended(RouteServiceProvider::Director);
                }
            }
            
        }

        return $next($request);
    }
}
