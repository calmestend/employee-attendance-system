<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Create users") }}
                </div>
                <div class="p-6 flex flex-column place-content-around text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('admin.users.create-admin') }}">
                        @csrf
                        <x-primary-button class="ms-4">
                            {{ __('Create Admin') }}
                        </x-primary-button>
                    </form>
                    <form method="POST" action="{{ route('admin.users.create-teacher') }}">
                        @csrf
                        <x-primary-button class="ms-4">
                            {{ __('Create Teacher') }}
                        </x-primary-button>
                    </form>
                    <form method="POST" action="{{ route('admin.users.create-student') }}">
                        @csrf
                        <x-primary-button class="ms-4">
                            {{ __('Create Student') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
