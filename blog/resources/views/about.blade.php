@extends('layouts.app')

@section('title', 'About - My Personal Blog')

@section('content')
<div class="max-w-5xl mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-start">
        <aside class="md:col-span-1">
            <div class="bg-white rounded-lg shadow p-6 text-center">
                <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center text-white text-4xl mb-4">
                    <i class="fas fa-user"></i>
                </div>
                <h2 class="text-xl font-bold">Fernandes Howard</h2>
                <p class="text-sm text-gray-500">UC Makassar — Student • PHP & Laravel</p>
                <div class="mt-4">
                    <a href="{{ route('contact') }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Contact</a>
                </div>
            </div>

            <div class="mt-6 bg-white rounded-lg shadow p-4">
                <h3 class="font-semibold text-gray-700 mb-3">Interests</h3>
                <ul class="text-sm text-gray-600 space-y-2">
                    <li class="flex items-center"><i class="fas fa-star text-yellow-400 mr-2"></i>Technology</li>
                    <li class="flex items-center"><i class="fas fa-robot text-gray-500 mr-2"></i>AI & ML</li>
                    <li class="flex items-center"><i class="fas fa-gamepad text-pink-500 mr-2"></i>Gaming</li>
                </ul>
            </div>
        </aside>

        <section class="md:col-span-2 space-y-8">
            <div class="bg-white rounded-lg shadow p-6">
                <h1 data-animate="fade-up" class="text-3xl font-bold text-gray-800 mb-3">About Me</h1>
                <p class="text-gray-700">Welcome to my personal blog! I'm a UC Makassar student currently studying PHP and Laravel. I build web apps, learn new stacks, and enjoy creating practical projects.</p>
                <p class="text-gray-700 mt-3">Outside coding I help in my family store, listen to music, and explore AI prompts and tools.</p>
            </div>

            {{-- Skills --}}
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-2xl font-semibold text-gray-800 mb-4">Skills</h3>
                @if(isset($skills) && $skills->isNotEmpty())
                    <div class="flex flex-wrap gap-3">
                        @foreach($skills as $skill)
                            <div class="px-3 py-2 bg-gray-100 rounded-full text-sm">
                                <strong class="mr-2">{{ $skill->name }}</strong>
                                <span class="text-xs text-gray-500">{{ $skill->level }}</span>
                            </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-600">No skills yet.</p>
                @endif
            </div>

            {{-- Projects --}}
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Projects</h3>
                    <a href="{{ route('portfolio.projects') }}" class="text-sm text-blue-600 hover:underline">See all</a>
                </div>

                @if(isset($projects) && $projects->isNotEmpty())
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        @foreach($projects as $project)
                            <article class="border rounded-lg p-4 hover:shadow-md">
                                <h4 class="font-semibold text-lg"><a href="{{ route('portfolio.projects.show', $project->id) }}" class="text-blue-600 hover:underline">{{ $project->title }}</a></h4>
                                <div class="text-xs text-gray-500 mb-2">{{ $project->start_date?->format('M Y') }} - {{ $project->end_date?->format('M Y') ?? 'Present' }}</div>
                                <p class="text-gray-700 text-sm mb-3">{{ \Illuminate\Support\Str::limit($project->description, 140) }}</p>
                                <div class="flex items-center justify-between">
                                    <div class="text-xs text-gray-600">{{ $project->tech }}</div>
                                    @if($project->url)
                                        <a href="{{ $project->url }}" target="_blank" class="text-sm text-white bg-blue-600 px-3 py-1 rounded">Visit</a>
                                    @else
                                        <a href="{{ route('portfolio.projects.show', $project->id) }}" class="text-sm text-blue-600">Details →</a>
                                    @endif
                                </div>
                            </article>
                        @endforeach
                    </div>
                @else
                    <p class="text-gray-600">No projects yet.</p>
                @endif
            </div>

            {{-- Experiences --}}
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Experience</h3>
                    <a href="{{ route('portfolio.experiences') }}" class="text-sm text-blue-600 hover:underline">See all</a>
                </div>

                @if(isset($experiences) && $experiences->isNotEmpty())
                    <ol class="border-l-2 border-gray-200 ml-3">
                        @foreach($experiences as $exp)
                            <li class="mb-6 ml-6">
                                <div class="absolute -ml-8 mt-1 w-3 h-3 rounded-full bg-blue-600"></div>
                                <div class="flex items-baseline justify-between">
                                    <h4 class="font-semibold">{{ $exp->title }}</h4>
                                    <span class="text-sm text-gray-500">{{ $exp->start_date?->format('M Y') }} - {{ $exp->end_date?->format('M Y') ?? 'Present' }}</span>
                                </div>
                                <div class="text-sm text-gray-600">{{ $exp->company }}</div>
                                <p class="text-gray-700 mt-2">{{ \Illuminate\Support\Str::limit($exp->description, 220) }}</p>
                            </li>
                        @endforeach
                    </ol>
                @else
                    <p class="text-gray-600">No experiences recorded yet.</p>
                @endif
            </div>
        </section>
    </div>
</div>
<!-- Portfolio sections injected into About page -->
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow-md overflow-hidden">
        <div class="p-8">
            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Projects</h3>
            @if(isset($projects) && $projects->isNotEmpty())
                <ul class="space-y-4 mb-6">
                    @foreach($projects as $project)
                        <li>
                            <a class="text-lg font-semibold text-blue-600 hover:underline" href="{{ route('portfolio.projects.show', $project->id) }}">{{ $project->title }}</a>
                            <div class="text-sm text-gray-600">{{ $project->start_date?->format('M Y') }} - {{ $project->end_date?->format('M Y') ?? 'Present' }}</div>
                            <p class="text-gray-700">{{ \Illuminate\Support\Str::limit($project->description, 200) }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-600 mb-6">No projects yet.</p>
            @endif

            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Skills</h3>
            @if(isset($skills) && $skills->isNotEmpty())
                <div class="grid md:grid-cols-2 gap-6 mb-6">
                    @foreach($skills as $skill)
                        <div class="p-4 border rounded">
                            <div class="font-semibold">{{ $skill->name }}</div>
                            <div class="text-sm text-gray-600">{{ $skill->level }}</div>
                            @if($skill->description)
                                <p class="text-gray-700">{{ \Illuminate\Support\Str::limit($skill->description, 200) }}</p>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-gray-600 mb-6">No skills added yet.</p>
            @endif

            <h3 class="text-2xl font-semibold text-gray-800 mb-4">Experiences</h3>
            @if(isset($experiences) && $experiences->isNotEmpty())
                <ul class="space-y-4">
                    @foreach($experiences as $exp)
                        <li>
                            <a class="text-lg font-semibold text-blue-600 hover:underline" href="{{ route('portfolio.experiences.show', $exp->id) }}">{{ $exp->title }}</a>
                            <div class="text-sm text-gray-600">{{ $exp->company }} — {{ $exp->start_date?->format('M Y') }} - {{ $exp->end_date?->format('M Y') ?? 'Present' }}</div>
                            <p class="text-gray-700">{{ \Illuminate\Support\Str::limit($exp->description, 300) }}</p>
                        </li>
                    @endforeach
                </ul>
            @else
                <p class="text-gray-600">No experiences recorded yet.</p>
            @endif
        </div>
    </div>
</div>
@endsection