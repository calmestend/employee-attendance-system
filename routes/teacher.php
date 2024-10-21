<?php

use App\Http\Controllers\AttendanceRecordController;
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

    Route::get('/teacher/attendance_record', [AttendanceRecordController::class, 'create'])->name('teacher.attendance_record');
    Route::get('/teacher/attendance_record/show', [AttendanceRecordController::class, 'show'])->name('teacher.attendance_record.show');
    Route::post('/teacher/attendance_record/store', [AttendanceRecordController::class, 'store'])->name('teacher.attendance_record.store');
    Route::get('/teacher/attendance_history', [AttendanceRecordController::class, 'history'])->name('teacher.attendance_history');
});
