@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center mt-6 gap-6">
        <h2 class="text-3xl font-bold dark:text-gray-200">Welcome to this Blog!</h2>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-400">Discover amazing articles, tutorials and get in touch.</p>
    </div>
    <main class="container mx-auto mt-6 flex gap-6">
        <!-- Blog Posts Section -->
        <section class="w-3/4 bg-white dark:bg-gray-800 p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">Latest Posts</h2>
            <div class="space-y-6">
                @foreach ($posts as $post)
                    <article class="flex gap-4 border-b border-gray-200 pb-4">
                        <img src="{{ asset('https://placehold.co/150') }}" alt="Post Image"
                            class="w-32 h-32 object-cover rounded">
                        <div>
                            <h3 class="text-lg font-semibold"><a href="{{ route('post.show', $post) }}"
                                    class="dark:text-gray-200 hover:underline">{{ $post->title }}</a></h3>
                            <p class="text-gray-600 dark:text-gray-400">{{ substr($post->text, 0, 50) }}...</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </section>
        <!-- Sidebar Section -->
        <aside class="w-1/4 bg-white dark:bg-gray-800 p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">Categories</h2>
            <ul class="space-y-2">
                @foreach ($categories as $category)
                    <li>
                        <a href="/?category_id={{ $category->id }}"
                            class="text-gray-600 dark:text-gray-400 hover:text-gray-300">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </aside>
    </main>
@endsection
