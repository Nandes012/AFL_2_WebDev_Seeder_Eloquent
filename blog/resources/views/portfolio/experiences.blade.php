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
                        <a href="{{ route('portfolio.skills') }}" class="text-gray-600 hover:underline block">Skills</a>
                    </nav>
                </div>
            </aside>

            <section class="md:col-span-2">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-2xl font-semibold">Experiences</h2>
                    <a href="{{ route('home') }}" class="text-sm text-gray-500">← Back to home</a>
                </div>

                @if($experiences->isEmpty())
                    <p class="text-gray-600">No experiences yet.</p>
                @else
                    <div class="space-y-4">
                        @foreach($experiences as $exp)
                            <div class="bg-white border rounded-lg p-4 hover:shadow-lg transition-transform transform hover:-translate-y-1">
                                <div class="flex items-baseline justify-between">
                                    <h3 class="font-semibold text-lg"><a href="{{ route('portfolio.experiences.show', $exp->id) }}" class="text-blue-600 hover:underline">{{ $exp->title }}</a></h3>
                                    <span class="text-sm text-gray-500">{{ $exp->start_date?->format('M Y') }} - {{ $exp->end_date?->format('M Y') ?? 'Present' }}</span>
                                </div>
                                <div class="text-sm text-gray-600">{{ $exp->company }}</div>
                                <p class="text-gray-700 mt-2">{{ \Illuminate\Support\Str::limit($exp->description, 220) }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
            </section>
        </div>
    </div>
@endsection
