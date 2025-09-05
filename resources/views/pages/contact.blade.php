<x-layout.current_page>
    <x-slot:title>
        Elérhetőségeink
    </x-slot:title>
    <x-slot:page_title>
        Kapcsolat
    </x-slot:page_title>
    <x-slot:page_img>
        <img src="{{ Vite::asset('resources/images/img03.jpg') }}" class="object-cover h-full w-full">
    </x-slot:page_img>

    <div class="mx-auto max-w-7xl">
        <div class="max-w-6xl mx-auto text-center mb-10" style="color: var(--font-color-primary);">
            <h1 class="text-3xl font-bold mb-4">Lépjen velünk kapcsolatba</h1>
            <p class=" mb-2">
                Kérdése van, vagy segítségre van szüksége autója szervizelésével vagy alkatrész rendelésével kapcsolatban?
                Forduljon hozzánk bizalommal!
            </p>
            <p class="mb-2">
                Elérhet minket telefonon, emailben vagy az alábbi kapcsolatfelvételi űrlap kitöltésével.
                Kollégáink a lehető leghamarabb válaszolnak.
            </p>
        </div>

        <!-- Kapcsolat blokk -->
        <div class="w-full max-w-7xl mx-auto p-8 rounded-2xl shadow-xl grid grid-cols-1 md:grid-cols-2 gap-10" style="background-color: var(--bg-dark-secondary); color: var(--font-color-primary);">

            <!-- Bal oszlop: Céges adatok -->
            <div class="text-center block items-center">
                <h2 class="text-2xl font-bold mb-4"">Kapcsolat</h2>
                <p class=" text-lg font-semibold mb-2">Skulo Car Parts Kft.</p>
                    <p class="mb-2 mt-6">9200 Mosonmagyaróvár<br>Barátság utca 8</p>
                    <p class="mb-2 mt-6"><i class="fa-solid fa-phone"></i> <a href="tel:+36308902876" class="hover:underline">+36 30 890 2876</a></p>
                    <p class="mb-2"><i class="fa-solid fa-phone"></i> <a href="tel:+36305415808" class="hover:underline">+36 30 541 5808</a></p>
                    <p class="mb-2 mt-6"><i class="fa-solid fa-envelope"></i> <a href="mailto:info@skulocar.hu" class="hover:underline">info@skulocar.hu</a></p>
                    <div class="mt-4">
                        <h3 class="font-semibold text-lg mb-1"">Nyitvatartás</h3>
                    <p>H–P: 8:00 – 17:00</p>
                    <p>Sz–V: Zárva</p>
                </div>
            </div>

            <!-- Jobb oszlop: Kapcsolatfelvétel form -->
            <div>
                <h2 class=" text-2xl font-bold mb-4"">Írjon nekünk
                </h2>
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label class="block text-sm font-medium">Név <span class="text-red-500">*</span></label>
                        <input type="text" name="name" required class="w-full mt-1 border border-gray-700 rounded-lg p-3 focus:outline-none" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Telefonszám <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" required class="w-full mt-1 border border-gray-700 rounded-lg p-3 focus:outline-none" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Email cím <span class="text-red-500">*</span></label>
                        <input type="email" name="email" required class="w-full mt-1 border border-gray-700 rounded-lg p-3 focus:outline-none" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Üzenet <span class="text-red-500">*</span></label>
                        <textarea name="message" rows="4" required class="w-full mt-1 border border-gray-700 rounded-lg p-3 focus:outline-none" style="background-color:#2a2929; color: var(--font-color-primary);"></textarea>
                    </div>
                    <button type="submit" class="w-full py-3 rounded-lg font-semibold transition cursor-pointer" style="background-color: var(--secondary-color); color: white;" onmouseover="this.style.backgroundColor='var(--secondary-color-hover)'" onmouseout="this.style.backgroundColor='var(--secondary-color)'">
                        <i class="fa-solid fa-paper-plane mr-3"></i>Üzenet küldése
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout.current_page>