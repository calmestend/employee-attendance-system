<!-- resources/views/attendance_schedule.blade.php -->
<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schedule for ') }} {{ \Carbon\Carbon::parse($date)->format('F j, Y') }}
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
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="px-4 py-2 text-left">Classroom</th>
                                    <th class="px-4 py-2 text-left">Teacher</th>
                                    <th class="px-4 py-2 text-left">Course</th>
                                    <th class="px-4 py-2 text-left">Start Time</th>
                                    <th class="px-4 py-2 text-left">End Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($schedules as $schedule)
                                <tr>
                                    <td class="px-4 py-2">{{ $schedule->classroom->name }}</td>
                                    <td class="px-4 py-2">{{ $schedule->teacher->user->name }}</td>
                                    <td class="px-4 py-2">{{ $schedule->course->name }}</td>
                                    <td class="px-4 py-2">{{ $schedule->start_time }}</td>
                                    <td class="px-4 py-2">{{ $schedule->end_time }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        @if($schedules->isEmpty())
                        <p class="mt-4">No schedules available for this date.</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
