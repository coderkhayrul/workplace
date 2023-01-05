<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PanelMiddleware
{

    public function handle(Request $request, Closure $next)
    {
        if (Auth::user()->role->role_slug == 'super-admin' || Auth::user()->role->role_slug == 'admin' || Auth::user()->role->role_slug == 'buyer' || Auth::user()->role->role_slug == 'seller') {
            return $next($request);
        }
        return redirect()->back();
    }
}
