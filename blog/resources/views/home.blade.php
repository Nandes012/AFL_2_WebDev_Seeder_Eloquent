@extends('layouts.app')

@section('title', 'Home - My Personal Blog')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-8">
    
    <div data-animate="fade-up" class="text-center py-16 bg-gradient-to-r from-blue-500 to-purple-600 text-white rounded-2xl mb-12">
        <h1 class="text-5xl font-bold mb-6">Welcome to My Personal Blog</h1>
        <p class="text-xl mb-8 max-w-2xl mx-auto">Sharing thoughts, experiences, and knowledge about technology, programming, and life.</p>
        <a href="{{ route('blog.index') }}" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition duration-300">
            Read My Blog
        </a>
    </div>

    
    <div class="mb-12">
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Featured Posts</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div data-animate="zoom-in" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">My First Blog Post</h3>
                    <p class="text-gray-600 mb-4">This is my first blog post where I share my thoughts and experiences...</p>
                    <a href="{{ route('blog.show', 'my-first-blog-post') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                        Read More →
                    </a>
                </div>
            </div>
            <div data-animate="zoom-in" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Learning Laravel</h3>
                    <p class="text-gray-600 mb-4">My journey learning Laravel and building web applications...</p>
                    <a href="{{ route('blog.show', 'learning-laravel') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                        Read More →
                    </a>
                </div>
            </div>
            <div data-animate="zoom-in" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-800 mb-3">Web Development Tips</h3>
                    <p class="text-gray-600 mb-4">Useful tips and tricks for modern web development...</p>
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">
                        Read More →
                    </a>
                </div>
            </div>
        </div>
    </div>

   
    <div data-animate="slide-left" class="bg-white rounded-lg shadow-md p-8 text-center">
        <h2 class="text-3xl font-bold text-gray-800 mb-4">About Me</h2>
        <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
            I'm a passionate student who loves to learn about technology, programming, and advancements of it.
        </p>
        <a href="{{ route('about') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
            Learn More About Me
        </a>
    </div>
</div>
@endsection