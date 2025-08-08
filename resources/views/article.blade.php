@extends('layouts.app')

@section('content')
    <main class="container mx-auto mt-6 flex justify-center">
        <!-- Blog Article Section -->
        <section class="w-3/5 bg-white p-6 shadow-md rounded-lg">
            <h1 class="text-2xl font-bold mb-4">Blog Post Title</h1>
            <img src="{{ asset('https://placehold.co/800x400') }}" alt="Post Image" class="w-full object-cover rounded mb-4">
            <p class="text-gray-600 mb-4">Published on <span class="font-semibold">April 1, 2025</span></p>
            <div class="text-gray-800 space-y-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi consectetur, quam quaerat maxime explicabo
                    facilis totam quis, quo quae hic minus fugit tempore tenetur corrupti veritatis blanditiis. Sequi, ea
                    temporibus.</p>
                <p>Praesentium, numquam ad cumque temporibus sit ipsam quod quisquam reprehenderit, vero obcaecati a eaque
                    in atque adipisci illo, corporis iure nesciunt dicta quis laborum perferendis minus explicabo nemo
                    officiis! Eligendi?</p>
                <p>Architecto nisi vitae culpa, praesentium aliquam commodi quo accusantium suscipit nihil repudiandae,
                    dolores aperiam ullam. Eaque, placeat rem. Beatae aliquid quo, excepturi quia totam ex debitis vel culpa
                    voluptates ipsum?</p>
            </div>
        </section>
    </main>
@endsection
