<?php

namespace App\Http;

use App\Http\Middleware\ClientMiddleware;
use App\Http\Middleware\JWTMiddleware;
use App\Http\Middleware\ManagerMiddleware;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        \Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse::class,
        \Illuminate\Session\Middleware\StartSession::class,
        \Illuminate\Http\Middleware\HandleCors::class,
    ];

    protected $middlewareGroups = [
        'web' => [
            // Web middleware guruhidagi middleware lar
        ],

        'api' => [
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        'authManager' => ManagerMiddleware::class,
        'authClient' => ClientMiddleware::class,
//        'jwt' => JwtMiddleware::class,
    ];
}

