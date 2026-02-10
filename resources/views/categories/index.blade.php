@include('layouts.navigation')
<x-app-layout>
    <x-slot name="header">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h2 class="font-semibold text-xl leading-tight dark:text-gray-200">
                {{ __('Categories') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                    <a href="{{ route('categories.create') }}" class="dark:text-gray-200">Add new category</a>
                    <table>
                        <thead>
                            <tr>
                                <th class="dark:text-gray-200">Name</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td class="dark:text-gray-200"> {{ $category->name }}</td>
                                    <td>
                                        <a href=" {{ route('categories.edit', $category) }}"
                                            class="dark:text-gray-400 hover:underline">Edit</a>
                                        <form method="POST" action="{{ route('categories.destroy', $category) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure?')"
                                                class="hover:underline dark:text-red-400">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
