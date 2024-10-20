<?php

use Illuminate\Support\Facades\Route;

Route::get('/student', function () {
    return view('student.dashboard');
})->middleware(['auth', 'verified', 'role:1'])->name('student.dashboard');
