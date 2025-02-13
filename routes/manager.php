<?php

use Illuminate\Support\Facades\Route;

Route::get('/manager/dashboard', function () {
    return view('manager');
})->middleware(['role:Manager'])->name('manager');
