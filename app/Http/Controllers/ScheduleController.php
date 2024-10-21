<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Schedule;
use App\Models\Teacher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $schedules = Schedule::with(['classroom', 'teacher', 'course'])
        ->orderBy('classroom_id')
        ->get();

        return view('admin.schedule.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $classrooms = Classroom::all();
        $courses = Course::all();
        $teachers = Teacher::with('user')->get();
        return view('admin.schedule.create', compact('classrooms', 'courses', 'teachers'));
    }

    public function show(Request $request)
    {
        $date = $request->input('date');
        $dayOfWeek = date('l', strtotime($date));

        $schedules = Schedule::where('day_of_week', $dayOfWeek)->get();

        return view('admin.schedule.show', compact('schedules', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'classroom_id' => ['required'],
            'teacher_id' => ['required'],
            'course_id' => ['required'],
            'day_of_week' => ['required','in:Monday,Tuesday,Wednesday,Thursday,Friday'],
            'start_time' => ['required'],
            'end_time' => ['required'],
        ]);

        Schedule::create([
            'teacher_id' => $request->teacher_id,
            'classroom_id' => $request->classroom_id,
            'course_id' => $request->course_id,
            'day_of_week' => $request->day_of_week,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
        ]);

        return redirect()->route('admin.dashboard');
    }
}
