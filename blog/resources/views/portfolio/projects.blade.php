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
                        <a href="{{ route('portfolio.skills') }}" class="text-gray-600 hover:underline block">Skills</a>
                        <a href="{{ route('portfolio.experiences') }}" class="text-gray-600 hover:underline block">Experiences</a>
                    </nav>
                </div>
            </aside>

            <section class="md:col-span-2">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold">Projects</h2>
                    <a href="{{ route('home') }}" class="text-sm text-gray-500">← Back to home</a>
                </div>

                @if($projects->isEmpty())
                    <p class="text-gray-600">No projects yet.</p>
                @else
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        @foreach($projects as $project)
                            <article class="bg-white border rounded-lg p-4 hover:shadow-lg transition-transform transform hover:-translate-y-1">
                                <h3 class="text-lg font-semibold mb-1"><a href="{{ route('portfolio.projects.show', $project->id) }}" class="text-blue-600 hover:underline">{{ $project->title }}</a></h3>
                                <div class="text-xs text-gray-500 mb-2">{{ $project->start_date?->format('M Y') }} - {{ $project->end_date?->format('M Y') ?? 'Present' }}</div>
                                <p class="text-gray-700 text-sm mb-3">{{ \Illuminate\Support\Str::limit($project->description, 160) }}</p>

                                @if($project->tech)
                                    <div class="flex flex-wrap gap-2 mb-3">
                                        @foreach(explode(',', $project->tech) as $tag)
                                            <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded-full">{{ trim($tag) }}</span>
                                        @endforeach
                                    </div>
                                @endif

                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-600">&nbsp;</div>
                                    <div class="space-x-2">
                                        @if($project->url)
                                            <a href="{{ $project->url }}" target="_blank" class="text-sm text-white bg-blue-600 px-3 py-1 rounded">Visit</a>
                                        @endif
                                        <a href="{{ route('portfolio.projects.show', $project->id) }}" class="text-sm text-blue-600">Details →</a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection
