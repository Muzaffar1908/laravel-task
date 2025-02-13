<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        if(!Auth::check()) {
            return redirect()->route('login');
        }

        $authRole = Auth::user()->role->name;
        switch ($role) {
            case 'Manager':
                if($authRole == 'Manager') {
                    return $next($request);
                }
                break;
            case 'Client':
                if($authRole == 'Client') {
                    return $next($request);
                }
                break;
        }

        switch ($authRole) {
            case 1:
                return redirect()->route('manager');
                break;
            case 2:
                return redirect()->route('client');
        }

        return redirect()->route('login');
    }
}
