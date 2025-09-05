<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-parents.head />
</head>

<body class="bg-[var(--bg-dark)]">
    <div id="app">
        <header class="fixed z-50 w-full bg-black shadow-md">
            <x-parents.main-menu />
        </header>
        <section class="slider">
            <x-parents.welcome.slider />
        </section>
        <main class="mt-10 mb-10 main-wrapper">
            {{ $slot }}
        </main>
        <footer class="border-t border-gray-700 bg-[var(--bg-dark)] text-sm text-white">
            <x-parents.footer />
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    </div>
</body>

</html>