<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex justify-between items-center py-4">
            <div class="text-2xl font-bold text-gray-800">
                <a href="{{ route('home') }}">MyBlog</a>
            </div>

            <!-- Mobile nav toggle -->
            <div class="md:hidden">
                <button data-toggle="mobile-nav" data-target="#mobile-menu" aria-expanded="false" aria-label="Toggle navigation" class="text-gray-600 hover:text-blue-600 focus:outline-none">
                    <i class="fas fa-bars fa-lg"></i>
                </button>
            </div>

            {{-- include menu inside the nav so location matches previous layout --}}
            @include('partials.menu')
        </div>
    </div>
</nav>
