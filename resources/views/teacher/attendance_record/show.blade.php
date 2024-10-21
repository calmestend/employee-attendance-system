<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schedule for ') }} {{ \Carbon\Carbon::parse($date)->format('F j, Y') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('teacher.attendance_record.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="date" value="{{ $date }}">
                        <div class="overflow-x-auto">
                            <table
                                class="min-w-full table-auto border-collapse rounded-md shadow-sm border-gray-300 dark:border-gray-700">
                                <thead>
                                    <tr class="bg-gray-100 dark:bg-gray-700">
                                        <th class="px-4 py-2 text-left">Course</th>
                                        <th class="px-4 py-2 text-left">Start Time</th>
                                        <th class="px-4 py-2 text-left">End Time</th>
                                        <th class="px-4 py-2 text-left">Student</th>
                                        <th class="px-4 py-2 text-left">Attendance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($schedules as $schedule)
                                    @foreach($schedule->classroom->students as $student)
                                    <tr>
                                        <td class="px-4 py-2">{{ $schedule->course->name }}</td>
                                        <td class="px-4 py-2">{{ $schedule->start_time }}</td>
                                        <td class="px-4 py-2">{{ $schedule->end_time }}</td>
                                        <td class="px-4 py-2">{{ $student->user->name }}</td>
                                        <td class="px-4 py-2">
                                            <select name="attendance[{{ $schedule->id }}][{{ $student->id }}]"
                                                class="form-select border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                                <option value="present">Present</option>
                                                <option value="absent">Absent</option>
                                                <option value="late">Late</option>
                                                <option value="excused">Excused</option>
                                            </select>
                                            <input type="hidden" name="schedule_ids[{{ $schedule->id }}]"
                                                value="{{ $schedule->id }}">
                                        </td>
                                    </tr>
                                    @endforeach
                                    @endforeach
                                </tbody>
                            </table>
                            @if($schedules->isEmpty())
                            <p class="mt-4">No schedules available for this date.</p>
                            @else
                        </div>
                        <div class="mt-6">
                            <x-primary-button class="ms-4">
                                {{ __('Save Attendance') }}
                            </x-primary-button>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-teacher-layout>
