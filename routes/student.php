<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', 'role:1'])->group(function () {
    Route::get('/student', function () { return view('student.dashboard');})->name('student.dashboard');
});
