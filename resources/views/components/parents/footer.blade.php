<!-- Fő footer blokkok -->
<div class="mx-auto grid max-w-7xl grid-cols-1 gap-6 px-6 py-10 md:grid-cols-3">

    <!-- 1. blokk: Logo + info -->
    <div class="space-y-3">
        <a href="#" class="text-xl font-bold text-[var(--secondary-color)]">
            <img src="{{ Vite::asset('resources/images/skulo-car-white.webp') }}" alt="Skulo Car KFT." class="h-8 mb-4">
        </a>
        <div class="space-y-1">
            <p class="text-sm font-semibold">Cím:</p>
            <p>9200 Mosonmagyaróvár, Barátság utca 8.</p>
        </div>
        <div class="space-y-1">
            <p class="text-sm font-semibold">Telefon:</p>
            <p>+36 30 890 2876</p>
            <p>+36 30 541 5808</p>
        </div>
        <div class="space-y-1">
            <p class="text-sm font-semibold">E-mail cím:</p>
            <p><a href="mailto:info@skulocar.hu">info@skulocar.hu</a></p>
        </div>
        <div class="space-y-1">
            <p class="text-sm font-semibold">Nyitvatartás:</p>
            <p>H-P: 08:00 - 17:00 - SZ-V: Zárva</p>
        </div>
    </div>

    <!-- 2. blokk: Social Media -->
    <div class="flex flex-col items-start space-y-3 md:items-center">
        <h3 class="text-lg font-semibold">Kövess minket</h3>
        <div class="flex h-8 w-8 items-center justify-center rounded-full bg-blue-600 text-xs">
            FB
        </div>
    </div>

    <!-- 3. blokk: Hírlevél -->
    <div class="space-y-3">
        <h3 class="text-lg font-semibold">Iratkozzon fel hírlevelünkre</h3>
        <p class="text-sm text-gray-300">
            Ne maradjon le újdonságainkról és akcióinkról!
            Havi hírlevelünkben mindig hasznos tippeket és friss ajánlatokat talál.
        </p>

        <form class="flex flex-col gap-3">
            <input type="email" placeholder="Email címed" required class="w-full rounded border border-[var(--secondary-color)] px-3 py-2 text-sm text-gray-300 placeholder-gray-400 focus:border-[var(--secondary-color)] focus:outline-none focus:ring-2 focus:ring-[var(--secondary-color)]">

            <button type="submit" class="flex cursor-pointer items-center justify-center gap-2 rounded-xl bg-[var(--secondary-color)] px-6 py-3 font-semibold text-white shadow-md transition hover:bg-[var(--secondary-color-hover)] hover:shadow-lg">
                <i class="fa-solid fa-envelope-open-text"></i>
                Feliratkozás
            </button>
        </form>
    </div>

</div>
<div class="mt-6 border-t border-gray-700 px-6 py-3">
    <div class="mx-auto flex max-w-7xl flex-col justify-between gap-4 md:flex-row md:items-center">
        <div class="flex flex-wrap gap-4 text-xs text-gray-400">
            <a href="#" class="transition-colors duration-300 hover:text-white">Adatvédelmi nyilatkozat</a>
            <a href="#" class="transition-colors duration-300 hover:text-white">ÁSZF</a>
            <a href="#" class="transition-colors duration-300 hover:text-white">Cookie szabályzat</a>
        </div>
        <div class="mt-2 md:mt-0">
            <a href="#">
                <img src="https://via.placeholder.com/100x30?text=Logo" alt="Készítő logó" class="h-6">
            </a>
        </div>
    </div>
</div>