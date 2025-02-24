<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class ManagerMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'Iltimos, avval tizimga kiring!');
        }

        if (Auth::user()->role->name !== 'Manager') {
            return redirect('/login')->with('error', 'Sizda bu sahifaga kirish huquqi yo‘q!');
        }

        return $next($request);
    }
}
