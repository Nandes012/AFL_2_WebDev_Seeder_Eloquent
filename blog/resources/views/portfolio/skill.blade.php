@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-6 hover:shadow-lg transition-transform transform hover:-translate-y-1">
        <h1 class="text-2xl font-bold">{{ $skill->name }}</h1>
        <div class="text-sm text-gray-500 mb-3">{{ $skill->level }}</div>

        @if($skill->description)
            <p class="text-gray-700">{{ $skill->description }}</p>
        @endif

        <div class="mt-6">
            <a href="{{ route('portfolio.skills') }}" class="text-sm text-gray-600">← Back to skills</a>
        </div>
    </div>
@endsection
