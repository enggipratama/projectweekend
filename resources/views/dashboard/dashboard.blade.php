<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto p-6 sm:px-6 lg:px-8 space-y-6 mt-10">
            <div class="bg-base dark:bg-gray-800 overflow-hidden sm:rounded-xl rounded-xl">
                <div class="p-6 font-bold text-textbase dark:text-textbase">
                    {{ __('Hello, Wellcome') }} {{ Auth::user()->name }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
