<x-student-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Student') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="overflow-x-auto">
                            <table
                                class="min-w-full table-auto border-collapse rounded-md shadow-sm border-indigo-200 dark:border-gray-700">
                                <thead>
                                    <tr class="bg-indigo-100 dark:bg-gray-700 rounded-t-md shadow-sm">
                                        <th
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-l-md shadow-sm text-left">
                                            Classroom
                                        </th>
                                        <th
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm text-left">
                                            Teacher
                                        </th>
                                        <th
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm text-left">
                                            Course
                                        </th>
                                        <th
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm text-left">
                                            Day of the Week
                                        </th>
                                        <th
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm text-left">
                                            Start Time
                                        </th>
                                        <th
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-r-md shadow-sm text-left">
                                            End Time
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($schedules as $schedule)
                                    <tr class="hover:bg-indigo-50 dark:hover:bg-gray-600">
                                        <td
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-l-md shadow-sm">
                                            {{ $schedule->classroom->name }}
                                        </td>
                                        <td
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm">
                                            {{ $schedule->teacher->user->name }}
                                        </td>
                                        <td
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm">
                                            {{ $schedule->course->name }}
                                        </td>
                                        <td
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm">
                                            {{ $schedule->day_of_week }}
                                        </td>
                                        <td
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm">
                                            {{ $schedule->start_time }}
                                        </td>
                                        <td
                                            class="px-4 py-2 border-indigo-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-r-md shadow-sm">
                                            {{ $schedule->end_time }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-student-layout>
