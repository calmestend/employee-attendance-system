<?php

use App\Models\Schedule;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'verified', 'role:2'])->group(function () {
    Route::get('/teacher', function () {
        $user = auth()->user();
        $teacher = $user->teacher;

        $schedules = Schedule::whereHas('course', function ($query) use ($teacher) {
            $query->where('teacher_id', $teacher->id);
        })->get();

        return view('teacher.dashboard', compact('schedules'));
    })->name('teacher.dashboard');
});
