<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', 'role:2'])->group(function () {
    Route::get('/teacher', function () { return view('teacher.dashboard');})->name('teacher.dashboard');
});
