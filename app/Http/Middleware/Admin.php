<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
        // if(Auth::check() && Auth::user()->role->role_slug == 'admin'){
        //     return $next($request);
        // }else{
        //     $notification = array(
        //         'message' => 'Access Denied',
        //         'alert-type' => 'error',
        //     ); // returns Notification,
        //     return redirect()->route('web.home')->with($notification);
        // }
    }
}
