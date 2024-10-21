<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Schedules') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Create Schedule") }}
                </div>
                <form class="p-6 text-gray-900 dark:text-gray-100" method="POST"
                    action="{{ route('admin.schedule.store') }}">
                    @csrf
                    <!-- Day of the Week -->
                    <div>
                        <x-input-label for="day_of_week" :value="__('Day of the Week')" />
                        <select class='border-gray-300
                            dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md
                            shadow-sm' name="day_of_week" id="day_of_week" required>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednesday">Wednesday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                    </div>


                    <!-- Start Time -->
                    <div class="mt-4">
                        <x-input-label for="start_time" :value="__('Start time')" />
                        <input class='border-gray-300
                            dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md
                            shadow-sm' type="time" name="start_time" id="start_time" required>
                    </div>

                    <!-- End Time -->
                    <div class="mt-4">
                        <x-input-label for="end_time" :value="__('End time')" />
                        <input class='border-gray-300
                            dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md
                            shadow-sm' type="time" name="end_time" id="end_time" required>
                    </div>

                    <!-- Classroom -->
                    <div class="mt-4">
                        <x-input-label for="classroom_id" :value="__('Classroom')" />
                        <select name="classroom_id" class='border-gray-300
                            dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md
                            shadow-sm'>
                            @foreach ($classrooms as $classroom)
                            <option value="{{ $classroom->id }}">{{ $classroom->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Course -->
                    <div class="mt-4">
                        <x-input-label for="course_id" :value="__('Course')" />
                        <select name="course_id" class='border-gray-300
                            dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md
                            shadow-sm'>
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Teachers -->
                    <div class="mt-4">
                        <x-input-label for="teacher_id" :value="__('Teacher')" />
                        <select name="teacher_id" class='border-gray-300
                            dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500
                            dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md
                            shadow-sm'>
                            @foreach ($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->user->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <x-primary-button class="ms-4">
                            {{ __('Create Schedule') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 flex flex-column place-content-around text-gray-900 dark:text-gray-100">
                <form method="POST" action="{{ route('admin.schedule.index') }}">
                    @csrf
                    <x-primary-button class="ms-4">
                        {{ __('Show Schedules') }}
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
