<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuthMiddleware
{
     public function handle(Request $request, Closure $next)
    {
        
        if ($request->path() == "/admin" && !$request->session()->has('admin')) {
            return redirect('/login');
        }

        return $next($request);
    }
}