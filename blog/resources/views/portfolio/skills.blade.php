@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto px-4 py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <aside class="md:col-span-1">
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <div class="w-24 h-24 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center text-white text-3xl mb-3">
                        <i class="fas fa-user"></i>
                    </div>
                    <h3 class="font-bold">Fernandes Howard</h3>
                    <p class="text-sm text-gray-500">Portfolio</p>
                    <nav class="mt-4 text-sm">
                        <a href="{{ route('about') }}" class="text-gray-600 hover:underline block">About</a>
                        <a href="{{ route('portfolio.projects') }}" class="text-gray-600 hover:underline block">Projects</a>
                        <a href="{{ route('portfolio.experiences') }}" class="text-gray-600 hover:underline block">Experiences</a>
                    </nav>
                </div>
            </aside>

            <section class="md:col-span-2">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold">Skills</h2>
                    <a href="{{ route('home') }}" class="text-sm text-gray-500">← Back to home</a>
                </div>

                @if($skills->isEmpty())
                    <p class="text-gray-600">No skills yet.</p>
                @else
                    <div class="flex flex-wrap gap-3">
                        @foreach($skills as $skill)
                            <a href="{{ route('portfolio.skills.show', $skill->id) }}" class="inline-block bg-white border rounded-lg px-4 py-3 hover:shadow-lg transition-transform transform hover:-translate-y-1 w-full md:w-auto">
                                <div class="font-semibold">{{ $skill->name }}</div>
                                <div class="text-xs text-gray-500">{{ $skill->level }}</div>
                                @if($skill->description)
                                    <div class="text-xs text-gray-600 mt-1">{{ \Illuminate\Support\Str::limit($skill->description, 80) }}</div>
                                @endif
                            </a>
                        @endforeach
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection
