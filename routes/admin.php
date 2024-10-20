<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;

Route::middleware(['auth', 'verified', 'role:3'])->group(function () {
    Route::get('/admin', function () { return view('admin.dashboard');})->name('admin.dashboard');

    Route::get('/admin/classrooms', [ClassroomController::class, 'create'])->name('admin.classroom.create');
    Route::post('/admin/classrooms', [ClassroomController::class, 'store'])->name('admin.classroom.store');

    Route::get('/admin/courses', [CourseController::class, 'create'])->name('admin.course.create');
    Route::post('/admin/courses', [CourseController::class, 'store'])->name('admin.course.store');
});
