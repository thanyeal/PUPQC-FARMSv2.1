<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class acadhead
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    // public function handle(Request $request, Closure $next): Response
    // {
    //     if (Auth::check()) {
    //         if (Auth::user()->role_id == '1') {
    //             return $next($request);
    //         }
    //         else {
    //             return back()->with('error', 'Access Denied because you are not an Admin');
    //         }
    //     }
    //     else {
    //         return redirect()->route('/')->with('error', 'Please login first');
    //     }
    //     return $next($request);
    // }
    public function handle($request, Closure $next)
    {
        if (Auth::check() && Auth::user()->role_id == '1') {
            return $next($request);
        }
        return redirect('/'); // Redirect to home or some other route if not admin
    }
}
