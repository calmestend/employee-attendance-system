<?php

namespace App\Http\Controllers;

use App\Models\AttendanceRecord;
use App\Models\Schedule;
use Illuminate\Http\Request;

class AttendanceRecordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('teacher.attendance_record.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function history()
    {
        $teacher = auth()->user()->teacher;

        $schedules = Schedule::where('teacher_id', $teacher->id)
            ->with('classroom.students.attendanceRecords')
            ->get();

        return view('teacher.attendance_history', compact('schedules'));
    }


    public function store(Request $request)
    {

        $attendances = $request->input('attendance');
        $scheduleIds = $request->input('schedule_ids');
        $date = $request->input('date');

        foreach ($attendances as $scheduleId => $studentsAttendance) {
            foreach ($studentsAttendance as $studentId => $status) {
                AttendanceRecord::create([
                    'student_id' => $studentId,
                    'schedule_id' => $scheduleId,
                    'status' => $status,
                    'date' => $date,
                ]);
            }
        }
        return redirect()->route('teacher.attendance_record');

    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $date = $request->input('date');
        $dayOfWeek = date('l', strtotime($date));

        $teacher = auth()->user()->teacher;

        $schedules = Schedule::where('day_of_week', $dayOfWeek)
                             ->where('teacher_id', $teacher->id)
                             ->with('classroom.students.user')
                             ->get();

        return view('teacher.attendance_record.show', compact('schedules', 'date'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
