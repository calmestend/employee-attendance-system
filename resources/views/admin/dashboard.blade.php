<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin') }}
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 flex flex-column place-content-around text-gray-900 dark:text-gray-100">
                <form method="GET" action="{{ route('admin.schedule.show') }}" class="p-6">
                    <div class="m-4">
                        <x-input-label for="date" :value="__('Schedule Date')" />
                        <input type="date" id="date" name="date" required class="mt-1 block w-full px-3 py-2 border border-gray-300 dark:border-gray-700
                               dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 focus:ring-indigo-500
                               sm:text-sm rounded-md shadow-sm">

                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Search Schedule') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
