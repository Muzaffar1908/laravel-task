<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Application\ApplicationController;

Route::middleware(['authClient'])->group(function () {
    Route::get('/client/dashboard', function () {
        return view('client');
    })->name('client');
});

