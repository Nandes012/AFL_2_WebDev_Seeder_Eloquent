<div id="main-menu" class="hidden md:flex items-center space-x-6">
    <a href="{{ route('home') }}" class="text-gray-600 hover:text-blue-600">Home</a>
    <a href="{{ route('blog.index') }}" class="text-gray-600 hover:text-blue-600">Blog</a>
    <a href="{{ route('about') }}" class="text-gray-600 hover:text-blue-600">About</a>
    <a href="{{ route('contact') }}" class="text-gray-600 hover:text-blue-600">Contact</a>
</div>

<!-- Mobile menu (hidden by default) -->
<div id="mobile-menu" class="md:hidden hidden px-4 pb-4">
    <a href="{{ route('home') }}" class="block py-2 text-gray-700">Home</a>
    <a href="{{ route('blog.index') }}" class="block py-2 text-gray-700">Blog</a>
    <a href="{{ route('about') }}" class="block py-2 text-gray-700">About</a>
    <a href="{{ route('contact') }}" class="block py-2 text-gray-700">Contact</a>
</div>
