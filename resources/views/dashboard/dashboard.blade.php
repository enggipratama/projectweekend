<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-textbase">
        <div class="grid grid-cols-1 gap-4 mt-5 p-4">
            @include('dashboard.partials.homepage')
        </div>
        <div class="grid grid-cols-1 gap-4 mt-5">
            @include('layouts.footer')
        </div>
    </div>
</x-app-layout>
