@extends('layouts.app')

@section('title', $post->title . ' - My Personal Blog')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <article class="bg-white rounded-lg shadow-md overflow-hidden">
        
        <div class="p-8 border-b border-gray-200">
            <div class="flex items-center text-sm text-gray-500 mb-4">
                <span class="flex items-center mr-6">
                    <i class="fas fa-calendar mr-2"></i>
                    {{ optional($post->published_at)->format('F d, Y') }}
                </span>
                <span class="flex items-center">
                    <i class="fas fa-user mr-2"></i>
                    {{ optional($post->user)->name ?? 'Unknown' }}
                </span>
            </div>
            <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $post->title }}</h1>
        </div>

        
        <div class="p-8 prose max-w-none">
            {!! $post->body !!}
        </div>

        
        <div class="p-8 border-t border-gray-200 bg-gray-50">
            <div class="flex justify-between items-center">
                <a href="{{ route('blog.index') }}" 
                   class="text-blue-600 hover:text-blue-800 font-semibold transition duration-300">
                    ← Back to Blog
                </a>
                <div class="flex space-x-4">
                    <button class="text-gray-500 hover:text-blue-800 transition duration-300">
                        <i class="fab fa-linkedin"></i>
                    </button>
                </div>
            </div>
        </div>
    </article>

   
    <div class="mt-12">
        <h3 class="text-2xl font-bold text-gray-800 mb-6">You Might Also Like</h3>
        <div class="grid md:grid-cols-2 gap-6">
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Learning Laravel</h4>
                <p class="text-gray-600 mb-4">My journey learning Laravel and building web applications...</p>
                <a href="{{ route('blog.show', 'learning-laravel') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                    Read More →
                </a>
            </div>
            <div class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition duration-300">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Web Development Tips</h4>
                <p class="text-gray-600 mb-4">Useful tips and tricks for modern web development...</p>
                <a href="#" class="text-blue-600 hover:text-blue-800 font-semibold">
                    Read More →
                </a>
            </div>
        </div>
    </div>
</div>
@endsection