<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <x-parents.head />
</head>
@props(['title'])

<body class="bg-[var(--bg-dark)] text-[var(--font-color-primary)]">
    <div id="app">
        <header class="stiky z-50 w-full bg-black shadow-md">
            <x-parents.main-menu />
        </header>
        <section class="flex mb-10 z-20 relative text-center top-head items-center justify-center w-full h-[350px]">
            <div class="absolute object-cover h-full w-full">
                {{ $page_img }}
            </div>
            <div class="text-center max-w-3xl relative">
                <h2 class="title">{{ $title }}</h2>
                <div class="breamchrumb flex">
                    <ul class="flex w-full justify-center">
                        {{-- Kezdőlap --}}
                        <li class="px-2">
                            <a href="#" class="hover:text-[var(--secondary-color-hover)] hover:underline font-bold">
                                Kezdőlap
                            </a>
                        </li>

                        {{-- mindig kell egy nyíl a Kezdőlap után --}}
                        @if (!empty($subtitle))
                        <li class="px-2"><i class="fa-solid fa-angle-right"></i></li>
                        <li class="px-2">{{ $subtitle }}</li>
                        @endif

                        {{-- csak akkor rakunk nyilat a subtitle után, ha subtitle tényleg volt --}}
                        @if (!empty($subtitle))
                        <li class="px-2"><i class="fa-solid fa-angle-right"></i></li>
                        @else
                        <li class="px-2"><i class="fa-solid fa-angle-right"></i></li>
                        @endif

                        {{-- Page title (mindig van) --}}
                        <li class="px-2">{{ $page_title }}</li>
                    </ul>
                </div>
            </div>
        </section>
        {{ $slot }}
        <footer class="mt-7 border-t border-gray-700 bg-[var(--bg-dark)] text-sm text-white">
            <x-parents.footer />
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        {{-- <script src="{{ Vite::asset('resources/js/lightbox.min.js') }}"></script> --}}
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
  const threshold = 50; // ennyi görgetés után ragadjon fel
  const onScroll = () => {
    if (window.scrollY > threshold) {
      document.body.classList.add('is-stuck');
    } else {
      document.body.classList.remove('is-stuck');
    }
  };
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
});
    </script>
</body>

</html>