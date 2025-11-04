<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'My Personal Blog')</title>
    <meta name="description" content="@yield('meta_description', 'A personal blog about technology, programming, and life')">
    <meta property="og:title" content="@yield('og_title', config('app.name', 'My Personal Blog'))" />
    <meta property="og:description" content="@yield('og_description', 'A personal blog about technology, programming, and life')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <link rel="icon" href="{{ asset('favicon.ico') }}" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Small animation utilities */
        .anim-hidden { opacity: 0; transform: translateY(12px) scale(0.995); }
        .anim-fade-up { transition: opacity 500ms ease, transform 500ms ease; }
        .anim-fade-up.anim-in { opacity: 1; transform: translateY(0) scale(1); }
        .anim-zoom-in { transition: opacity 400ms ease, transform 400ms ease; transform: scale(.96); opacity: 0; }
        .anim-zoom-in.anim-in { transform: scale(1); opacity: 1; }
        .anim-slide-left { transition: opacity 500ms ease, transform 500ms ease; transform: translateX(18px); opacity: 0; }
        .anim-slide-left.anim-in { transform: translateX(0); opacity: 1; }
        @media (prefers-reduced-motion: reduce) {
            .anim-fade-up, .anim-zoom-in, .anim-slide-left { transition: none !important; transform: none !important; }
        }
    </style>
    {{-- Allow views to push additional styles --}}
    @stack('styles')
</head>
<body class="bg-gray-50">
    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script>
        // Web Animations API implementation (keeps same behavior as before)
        // Also provides small utilities: mobile nav toggle and theme toggle stub.
        (function(){
            if (typeof window === 'undefined') return;

            const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

            function getKeyframes(type) {
                switch(type) {
                    case 'zoom-in':
                        return [ { opacity: 0, transform: 'scale(.96)' }, { opacity: 1, transform: 'scale(1)' } ];
                    case 'slide-left':
                        return [ { opacity: 0, transform: 'translateX(18px)' }, { opacity: 1, transform: 'translateX(0)' } ];
                    case 'fade-up':
                    default:
                        return [ { opacity: 0, transform: 'translateY(12px) scale(.995)' }, { opacity: 1, transform: 'translateY(0) scale(1)' } ];
                }
            }

            const defaultTiming = { duration: 500, easing: 'cubic-bezier(.2,.9,.2,1)', fill: 'forwards' };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (!entry.isIntersecting) return;
                    const el = entry.target;
                    const type = el.getAttribute('data-animate') || 'fade-up';

                    if (prefersReduced || typeof el.animate !== 'function') {
                        el.classList.remove('anim-hidden');
                        el.classList.add('anim-in');
                        observer.unobserve(el);
                        return;
                    }

                    const keyframes = getKeyframes(type);
                    const timing = Object.assign({}, defaultTiming);
                    const dataDelay = el.getAttribute('data-delay');
                    const dataDuration = el.getAttribute('data-duration');
                    if (dataDelay) timing.delay = parseInt(dataDelay, 10) || 0;
                    if (dataDuration) timing.duration = parseInt(dataDuration, 10) || timing.duration;

                    try {
                        el.animate(keyframes, timing);
                    } catch (e) {
                        el.classList.remove('anim-hidden');
                        el.classList.add('anim-in');
                    }

                    observer.unobserve(el);
                });
            }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

            function initMobileToggle() {
                document.querySelectorAll('[data-toggle="mobile-nav"]').forEach(btn => {
                    btn.addEventListener('click', () => {
                        const target = btn.getAttribute('data-target');
                        const el = document.querySelector(target);
                        if (!el) return;
                        const expanded = btn.getAttribute('aria-expanded') === 'true';
                        btn.setAttribute('aria-expanded', expanded ? 'false' : 'true');
                        el.classList.toggle('hidden');
                    });
                });
            }

            function initThemeToggle() {
                document.querySelectorAll('[data-toggle="theme"]').forEach(btn => {
                    btn.addEventListener('click', () => {
                        // simple stub: toggle 'dark' on html element
                        document.documentElement.classList.toggle('dark');
                    });
                });
            }

            document.addEventListener('DOMContentLoaded', function(){
                const els = document.querySelectorAll('[data-animate]');
                els.forEach(el => {
                    el.classList.add('anim-hidden');
                    observer.observe(el);
                });

                initMobileToggle();
                initThemeToggle();
            });
        })();
    </script>

    {{-- Analytics placeholder: paste analytics snippet here or push via @stack('scripts') --}}
    {{-- @stack('scripts') will be rendered below so pages can push page-specific JS --}}
    @stack('scripts')
</body>
</html>
