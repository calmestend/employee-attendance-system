<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassroomController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\RegisteredAdminController;
use App\Http\Controllers\RegisteredStudentController;
use App\Http\Controllers\RegisteredTeacherController;
use App\Http\Controllers\ScheduleController;

Route::middleware(['auth', 'verified', 'role:3'])->group(function () {
    Route::get('/admin', function () { return view('admin.dashboard');})->name('admin.dashboard');

    Route::get('/admin/classrooms', [ClassroomController::class, 'create'])->name('admin.classroom.create');
    Route::post('/admin/classrooms/create', [ClassroomController::class, 'store'])->name('admin.classroom.store');
    Route::post('/admin/classrooms', [ClassroomController::class, 'index'])->name('admin.classroom.index');

    Route::get('/admin/courses', [CourseController::class, 'create'])->name('admin.course.create');
    Route::post('/admin/courses/create', [CourseController::class, 'store'])->name('admin.course.store');
    Route::post('/admin/courses', [CourseController::class, 'index'])->name('admin.course.index');

    Route::get('/admin/users', [RegisteredUserController::class, 'create'])->name('admin.users.create');

    Route::post('/admin/users/create-admin', [RegisteredAdminController::class, 'create'])->name('admin.users.create-admin');
    Route::post('/admin/users/register-admin', [RegisteredAdminController::class, 'store'])->name('admin.users.store-admin');

    Route::post('/admin/users/create-student', [RegisteredStudentController::class, 'create'])->name('admin.users.create-student');
    Route::post('/admin/users/register-student', [RegisteredStudentController::class, 'store'])->name('admin.users.store-student');

    Route::post('/admin/users/create-teacher', [RegisteredTeacherController::class, 'create'])->name('admin.users.create-teacher');
    Route::post('/admin/users/register-teacher', [RegisteredTeacherController::class, 'store'])->name('admin.users.store-teacher');

    Route::get('/admin/schedule', [ScheduleController::class, 'create'])->name('admin.schedule.create');
    Route::post('/admin/schedule/register', [ScheduleController::class, 'store'])->name('admin.schedule.store');
    Route::post('/admin/schedule', [ScheduleController::class, 'index'])->name('admin.schedule.index');
});
