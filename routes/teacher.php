<?php

use Illuminate\Support\Facades\Route;

Route::get('/teacher', function () {
    return view('teacher.dashboard');
})->middleware(['auth', 'verified', 'role:2'])->name('teacher.dashboard');
