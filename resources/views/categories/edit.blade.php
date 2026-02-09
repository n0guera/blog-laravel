@include('layouts.navigation')
<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl leading-tight dark:text-gray-200">
                {{ __('Edit Category') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-200">
                    <form>
                        {{ $category->name }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
