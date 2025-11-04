@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-start justify-between">
            <div>
                <h1 class="text-2xl font-bold">{{ $experience->title }}</h1>
                <div class="text-sm text-gray-500">{{ $experience->company }}</div>
                <div class="text-sm text-gray-500">{{ $experience->start_date?->format('M Y') }} - {{ $experience->end_date?->format('M Y') ?? 'Present' }}</div>
            </div>
        </div>

        @if($experience->description)
            <p class="text-gray-700 mt-4">{{ $experience->description }}</p>
        @endif

        <div class="mt-6">
            <a href="{{ route('portfolio.experiences') }}" class="text-sm text-gray-600">← Back to experiences</a>
        </div>
    </div>
@endsection
