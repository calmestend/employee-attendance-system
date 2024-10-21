<x-teacher-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Attendance History') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto">
                        <table
                            class="min-w-full table-auto border-collapse rounded-md shadow-sm border-gray-300 dark:border-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 text-left">Student</th>
                                    <th class="px-4 py-2 text-left">Date</th>
                                    <th class="px-4 py-2 text-left">State</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($schedules as $schedule)
                                <tr>
                                    <td colspan="3" class="px-4 py-2"><strong>{{ $schedule->classroom->name }}</strong>
                                    </td>
                                </tr>
                                @foreach ($schedule->classroom->students as $student)
                                @foreach ($student->attendanceRecords as $attendanceRecord)
                                <tr>
                                    <td>{{ $student->user->name }}</td>
                                    <td>{{ $attendanceRecord->date}}</td>
                                    <td>{{ $attendanceRecord->status }}</td>
                                </tr>
                                @endforeach
                                @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-teacher-layout>
