<?php

use Illuminate\Support\Facades\Route;

Route::get('/client/dashboard', function () {
    return view('client');
})->middleware(['role:Client'])->name('client');
