<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ApiAuthController;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/register', [ApiAuthController::class, 'register']);
    Route::post('/login', [ApiAuthController::class, 'login']);
    Route::post('/logout', [ApiAuthController::class, 'logout'])->middleware('auth:api');
    Route::post('/refresh', [ApiAuthController::class, 'refresh'])->middleware('auth:api');
    Route::get('/profile', [ApiAuthController::class, 'profile'])->middleware('auth:api');
});
