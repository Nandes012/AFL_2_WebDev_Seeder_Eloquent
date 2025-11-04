<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body style="font-family: Arial, sans-serif; background: #f8fafc;">
    {{-- Shared navbar --}}
    @include('partials.navbar')

    <main class="max-w-6xl mx-auto px-4 py-8">
        <header class="mb-8">
            <div class="bg-gradient-to-r from-white via-white to-white/60 rounded-lg p-6 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <h1 class="text-3xl font-extrabold text-gray-900">My Portfolio</h1>
                        <p class="text-sm text-gray-600 mt-1">Selected projects, skills and experience — clean, responsive layout.</p>
                    </div>
                    <nav class="text-sm text-gray-600 hidden md:block">
                        <a href="{{ route('portfolio.projects') }}" class="hover:underline mr-3">Projects</a>
                        <a href="{{ route('portfolio.skills') }}" class="hover:underline mr-3">Skills</a>
                        <a href="{{ route('portfolio.experiences') }}" class="hover:underline">Experiences</a>
                    </nav>
                </div>
            </div>
        </header>

        @yield('content')
    </main>

    <footer style="margin-top:2rem; font-size:0.9rem; color:#666;">
        &copy; {{ date('Y') }} My Portfolio
    </footer>
</body>
</html>
