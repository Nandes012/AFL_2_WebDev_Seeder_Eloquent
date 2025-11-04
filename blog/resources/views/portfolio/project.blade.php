@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-start justify-between mb-4">
            <div>
                <h1 class="text-2xl font-bold">{{ $project->title }}</h1>
                <div class="text-sm text-gray-500">{{ $project->start_date?->format('M Y') }} - {{ $project->end_date?->format('M Y') ?? 'Present' }}</div>
            </div>
            <div class="text-right">
                @if($project->url)
                    <a href="{{ $project->url }}" target="_blank" class="text-white bg-blue-600 px-3 py-1 rounded">Visit</a>
                @endif
            </div>
        </div>

        <div class="prose">
            <p>{{ $project->description }}</p>
        </div>

        @if($project->tech)
            <div class="mt-4">
                <strong>Tech:</strong>
                <div class="flex flex-wrap gap-2 mt-2">
                    @foreach(explode(',', $project->tech) as $tag)
                        <span class="text-xs bg-gray-100 text-gray-700 px-2 py-1 rounded-full">{{ trim($tag) }}</span>
                    @endforeach
                </div>
            </div>
        @endif

        <div class="mt-6">
            <a href="{{ route('portfolio.projects') }}" class="text-sm text-gray-600">← Back to projects</a>
        </div>
    </div>
@endsection
