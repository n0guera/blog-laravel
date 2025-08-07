@extends('layouts.app')

@section('content')
    <div class="container mx-auto text-center mt-6 gap-6">
        <h2 class="text-3xl font-bold">Welcome to this Blog!</h2>
        <p class="mt-4 text-lg text-gray-600">Discover amazing articles, tutorials and get in touch.</p>
    </div>
    <main class="container mx-auto mt-6 flex gap-6">
        <!-- Blog Posts Section -->
        <section class="w-3/4 bg-white p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Latest Posts</h2>
            <div class="space-y-6">
                <article class="flex gap-4 border-b border-gray-200 pb-4">
                    <img src="{{ asset('https://placehold.co/150') }}" alt="Post Image"
                        class="w-32 h-32 object-cover rounded">
                    <div>
                        <h3 class="text-lg font-semibold"><a href="#" class="hover:underline">Blog Post Title</a></h3>
                        <p class="text-gray-600">A short description of the blog post goes here...</p>
                    </div>
                </article>
                <article class="flex gap-4 border-b border-gray-200 pb-4">
                    <img src="{{ asset('https://placehold.co/150') }}" alt="Post Image"
                        class="w-32 h-32 object-cover rounded">
                    <div>
                        <h3 class="text-lg font-semibold"><a href="#" class="hover:underline">Another Blog Post</a>
                        </h3>
                        <p class="text-gray-600">Another short description of a blog post...</p>
                    </div>
                </article>
            </div>
        </section>
        <!-- Sidebar Section -->
        <aside class="w-1/4 bg-white p-6 shadow-md rounded-lg">
            <h2 class="text-xl font-semibold mb-4">Categories</h2>
            <ul class="space-y-2">
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Technology</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Design</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Development</a></li>
                <li><a href="#" class="text-gray-600 hover:text-gray-800">Marketing</a></li>
            </ul>
        </aside>
    </main>
@endsection
