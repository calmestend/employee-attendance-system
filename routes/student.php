<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', 'role:1'])->group(function () {
    Route::get('/student', function () {
        $user = auth()->user();
        $student = $user->student;

        $classroom = $student->classroom;
        $schedules = $classroom->schedules;

        return view('student.dashboard', compact('schedules'));
    })->name('student.dashboard');
});
