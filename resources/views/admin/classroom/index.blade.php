<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Classrooms') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="container">
                        <div class="overflow-x-auto">
                            <table
                                class="min-w-full table-auto border-collapse rounded-md shadow-sm border-violet-200 dark:border-gray-700">
                                <thead>
                                    <tr class="bg-violet-100 dark:bg-gray-700 rounded-t-md shadow-sm">
                                        <th
                                            class="px-4 py-2 border-violet-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-l-md shadow-sm text-left">
                                            Classroom ID
                                        </th>
                                        <th
                                            class="px-4 py-2 border-violet-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm text-left">
                                            Classroom Name
                                        </th>
                                        <th
                                            class="px-4 py-2 border-violet-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm text-left">
                                            Students
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($classrooms as $classroom)
                                    <tr class="hover:bg-violet-50 dark:hover:bg-gray-600">
                                        <td
                                            class="px-4 py-2 border-violet-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 rounded-l-md shadow-sm">
                                            {{ $classroom->id }}
                                        </td>
                                        <td
                                            class="px-4 py-2 border-violet-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm">
                                            {{ $classroom->name }}
                                        </td>
                                        <td
                                            class="px-4 py-2 border-violet-200 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 shadow-sm">
                                            @foreach($classroom->students as $student)
                                            <span>{{ $student->user->name }}</span><br>
                                            @endforeach
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
</x-admin-layout>
