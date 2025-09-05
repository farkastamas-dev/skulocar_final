<!-- Header -->
<div class="relative flex h-[100px] items-center justify-between bg-black px-6 text-white" x-data="{ open: false, submenu1: false, submenu2: false }">
    <div class="container mx-auto flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="text-2xl font-bold text-[var(--secondary-color)]">
            <img src="{{ Vite::asset('resources/images/skulo-car-white.webp') }}" alt="Skulo Car Kft." class="h-12">
        </a>

        <!-- Desktop Menu -->
        <nav class="hidden items-center mainmenu space-x-8 md:flex">
            <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }} menu-item py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Főoldal</a>

            <!-- Submenu 1 -->
            <div class="group relative z-60">
                <button class="menu-item {{ request()->routeIs('szerviz.muhely', 'szerviz.szakszerviz', 'szerviz.hanggenerator', 'workshop_reference') ? 'active' : '' }} py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Szervíz</button>
                <div class="bg-[var(--bg-dark)]/90 w-55 absolute left-0 hidden shadow-md group-hover:block">
                    <a href="{{ route('szerviz.muhely') }}" class="{{ request()->routeIs('szerviz.muhely') ? 'active' : '' }} menu-item block border-l-2 border-transparent px-4 py-2 transition-colors duration-300 hover:border-[var(--secondary-color)] hover:bg-white/30 hover:text-[var(--secondary-color)]">Műhely</a>
                    <a href="{{ route('szerviz.szakszerviz') }}" class="{{ request()->routeIs('szerviz.szakszerviz') ? 'active' : '' }} menu-item block border-l-2 border-transparent px-4 py-2 transition-colors duration-300 hover:border-[var(--secondary-color)] hover:bg-white/30 hover:text-[var(--secondary-color)]">Szakszervíz</a>
                    <a href="{{ route('szerviz.hanggenerator') }}" class="{{ request()->routeIs('szerviz.hanggenerator') ? 'active' : '' }} menu-item block border-l-2 border-transparent px-4 py-2 transition-colors duration-300 hover:border-[var(--secondary-color)] hover:bg-white/30 hover:text-[var(--secondary-color)]">Hanggenerátor</a>
                    <a href="{{ route('workshop_reference') }}" class="{{ request()->routeIs('workshop_reference') ? 'active' : '' }} menu-item block border-l-2 border-transparent px-4 py-2 transition-colors duration-300 hover:border-[var(--secondary-color)] hover:bg-white/30 hover:text-[var(--secondary-color)]">Referenciáink</a>
                </div>
            </div>

            <!-- Submenu 2 -->
            <div class="group relative z-60">
                <div class="menu-item menu-item cursor-pointer py-3 transition-colors duration-300 {{ request()->routeIs('carcosmetics_reference') ? 'active' : '' }} hover:text-[var(--secondary-color)]">Autókozmetika</div>
                <div class="bg-[var(--bg-dark)]/80 absolute left-0 hidden w-48 shadow-md group-hover:block">
                    <a href="{{ route('carcosmetics_reference') }}" class="{{ request()->routeIs('carcosmetics_reference') ? 'active' : '' }} block border-l-2 border-transparent px-4 py-2 transition-colors duration-300 hover:border-[var(--secondary-color)] hover:bg-white/30 hover:text-[var(--secondary-color)]">Referenciáink</a>
                </div>
            </div>

            <a href="{{ route('carpart') }}" class="{{ request()->routeIs('carpart') ? 'active' : '' }} menu-item py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Alkatrész</a>
            <a href="{{ url('https://felnitrader.hu/skulocarparts') }}" target="_blank" class="py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Felni/Gumi</a>
            <a href="{{ route('price_offer') }}" class="{{ request()->routeIs('price_offer') ? 'active' : '' }} menu-item py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Árajánlat</a>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }} menu-item py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Kapcsolat</a>
        </nav>
    </div>

    <!-- Mobile Hamburger -->
    <button class="rounded p-2 hover:bg-gray-800 md:hidden" @click="open = !open">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>

    <!-- Mobile Menu -->
    <nav x-show="open" x-transition class="absolute left-0 top-[100px] z-50 w-full bg-black/95 shadow-md md:hidden">
        <ul class="flex flex-col divide-y divide-gray-700">
            <li>
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Főoldal</a>
            </li>

            <!-- Submenu 1 mobile -->
            <li>
                <button class="menu-item {{ request()->routeIs('muhely', 'szakszerviz', 'hanggenerator', 'szerviz/referenciaink') ? 'active' : '' }} flex w-full items-center justify-between px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]" @click="submenu1 = !submenu1">
                    Szervíz
                    <svg :class="{ 'rotate-90': submenu1 }" class="h-5 w-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <ul x-show="submenu1" x-transition class="bg-black/80">
                    <li><a href="{{ route('szerviz.muhely') }}" class="{{ request()->routeIs('szerviz.muhely') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Műhely</a></li>
                    <li><a href="{{ route('szerviz.szakszerviz') }}" class="{{ request()->routeIs('szerviz.szakszerviz') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Szakszervíz</a></li>
                    <li><a href="{{ route('szerviz.hanggenerator') }}" class="{{ request()->routeIs('szerviz.hanggenerator') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Hanggenerátor</a></li>
                    <li><a href="#" class="{{ request()->routeIs('szerviz/referenciaink') ? 'active' : '' }} menu-item block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Referenciáink</a></li>
                </ul>
            </li>

            <!-- Submenu 2 mobile -->
            <li>
                <button class="{{ request()->routeIs('autokozmetika') ? 'active' : '' }} menu-item flex w-full items-center justify-between px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]" @click="submenu2 = !submenu2">
                    Autókozmetika
                    <svg :class="{ 'rotate-90': submenu2 }" class="h-5 w-5 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
                <ul x-show="submenu2" x-transition class="bg-black/80">
                    <li><a href="#" class="block px-10 py-3 transition-colors duration-300 hover:text-[var(--secondary-color)]">Referenciáink</a></li>
                </ul>
            </li>

            <li><a href="{{ route('carpart') }}" class="{{ request()->routeIs('carpart') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Alkatrész</a></li>
            <li><a href="{{ url('https://felnitrader.hu/skulocarparts') }}" target="_blank" class="block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Felni/Gumi</a></li>
            <a href="{{ route('price_offer') }}" class="{{ request()->routeIs('price_offer') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Árajánlat</a></li>
            <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }} menu-item block px-6 py-4 transition-colors duration-300 hover:text-[var(--secondary-color)]">Kapcsolat</a></li>
        </ul>
    </nav>
</div>