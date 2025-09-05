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
    <script>
        document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("site-header");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            header.classList.add("fixed", "top-0", "left-0", "w-full", "shadow-lg", "z-50");
            header.classList.remove("relative");
        } else {
            header.classList.remove("fixed", "top-0", "left-0", "w-full", "shadow-lg", "z-50");
            header.classList.add("relative");
        }
    });
});
    </script>
</body>

</html>