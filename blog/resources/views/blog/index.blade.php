@extends('layouts.app')

@section('title', 'Blog - My Personal Blog')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">My Blog</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Thoughts, tutorials, and insights about web development, programming, and technology.
        </p>
    </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
        @foreach($posts as $post)
        <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
            <div class="p-6">
                <div class="flex items-center text-sm text-gray-500 mb-3">
                    <i class="fas fa-calendar mr-2"></i>
                    {{ optional($post->published_at)->format('M d, Y') }}
                </div>
                <h2 class="text-xl font-semibold text-gray-800 mb-3 hover:text-blue-600 transition duration-300">
                    <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                </h2>
                <p class="text-gray-600 mb-4">{{ $post->excerpt }}</p>
                <div class="flex items-center justify-between">
                    <a href="{{ route('blog.show', $post->slug) }}" 
                       class="text-blue-600 hover:text-blue-800 font-semibold transition duration-300">
                        Read More →
                    </a>
                    <span class="text-sm text-gray-500">
                        <i class="fas fa-user mr-1"></i>{{ optional($post->user)->name ?? 'Unknown' }}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection  