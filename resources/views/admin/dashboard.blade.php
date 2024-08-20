<x-admin-app-layout title="Dashboard">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-4">
        <div class="max-w-7xl mx-auto">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                   {{ \Illuminate\Support\Facades\Auth::user()->name }}  {{ __(" - logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
