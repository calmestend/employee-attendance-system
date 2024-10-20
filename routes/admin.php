<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified', 'role:3'])->name('admin.dashboard');
