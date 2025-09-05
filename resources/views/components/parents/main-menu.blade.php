<!-- Header -->
<div id="site-header" class="relative flex h-[100px] items-center justify-between bg-black px-6 text-white transition-all duration-300" x-data="{ open: false, submenu1: false, submenu2: false }">

    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold text-[var(--secondary-color)]">
            <img src="{{ Vite::asset('resources/images/skulo-car-white.webp') }}" alt="Skulo Car Kft." class="h-12">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden items-center mainmenu space-x-8 md:flex">
            <!-- ... a meglévő desktop linkek változatlanul ... -->
        </nav>
    </div>

    <!-- Mobile Hamburger -->
    <button class="relative z-[70] rounded p-2 hover:bg-gray-800 md:hidden" @click="open = !open" aria-label="Menü">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Mobile Menu (mindig a fejléc ALÁ nyílik) -->
    <nav x-show="open" x-transition class="absolute left-0 top-full z-[60] w-full bg-black/95 shadow-md md:hidden">
        <ul class="flex flex-col divide-y divide-gray-700">
            <li>
                <a @click="open=false" href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Főoldal</a>
            </li>

            <!-- Szervíz mobil -->
            <li>
                <button class="menu-item flex w-full items-center justify-between px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]" @click="submenu1 = !submenu1">
                    Szervíz
                    <svg :class="{ 'rotate-90': submenu1 }" class="h-5 w-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <ul x-show="submenu1" x-transition class="bg-black/80">
                    <li><a @click="open=false" href="{{ route('szerviz.muhely') }}" class="{{ request()->routeIs('szerviz.muhely') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Műhely</a></li>
                    <li><a @click="open=false" href="{{ route('szerviz.szakszerviz') }}" class="{{ request()->routeIs('szerviz.szakszerviz') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Szakszervíz</a></li>
                    <li><a @click="open=false" href="{{ route('szerviz.hanggenerator') }}" class="{{ request()->routeIs('szerviz.hanggenerator') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Hanggenerátor</a></li>
                    <li><a @click="open=false" href="{{ route('workshop_reference') }}" class="{{ request()->routeIs('workshop_reference') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Referenciáink</a></li>
                </ul>
            </li>

            <!-- Autókozmetika mobil -->
            <li>
                <button class="menu-item flex w-full items-center justify-between px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]" @click="submenu2 = !submenu2">
                    Autókozmetika
                    <svg :class="{ 'rotate-90': submenu2 }" class="h-5 w-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <ul x-show="submenu2" x-transition class="bg-black/80">
                    <li><a @click="open=false" href="{{ route('carcosmetics_reference') }}" class="{{ request()->routeIs('carcosmetics_reference') ? 'active' : '' }} block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Referenciáink</a></li>
                </ul>
            </li>

            <li><a @click="open=false" href="{{ route('carpart') }}" class="{{ request()->routeIs('carpart') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Alkatrész</a></li>
            <li><a @click="open=false" href="{{ route('carpart') }}" class="{{ request()->routeIs('carpart') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">3D futómű állítás</a></li>
            <li><a @click="open=false" href="{{ url('https://felnitrader.hu/skulocarparts') }}" target="_blank" class="block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Felni/Gumi</a></li>
            <li><a @click="open=false" href="{{ route('price_offer') }}" class="{{ request()->routeIs('price_offer') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Árajánlat</a></li>
            <li><a @click="open=false" href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Kapcsolat</a></li>
        </ul>
    </nav>

    <!-- Overlay a háttérre – kattintásra bezár -->
    <div x-show="open" x-transition.opacity class="fixed inset-0 z-[50] bg-black/50 md:hidden" @click="open=false"></div>
</div>