<?php

use App\Http\Controllers\Application\ApplicationController;
use Illuminate\Support\Facades\Route;

Route::middleware(['authManager'])->group(function () {
    Route::get('/manager/dashboard', function () {
        return view('manager');
    })->name('manager');
});

