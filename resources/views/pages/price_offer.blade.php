<x-layout.current_page>
    <x-slot:title>
        Árajánlat
    </x-slot:title>

    <x-slot:page_title>
        Árajánlat
    </x-slot:page_title>
    <x-slot:page_img>
        <img src="{{ Vite::asset('resources/images/img02.jpg') }}" class="object-cover h-full w-full">
    </x-slot:page_img>
    <div class="mx-auto max-w-7xl">
        <div class="mb-16 text-center">
            <div class="mx-auto mb-6 text-center">
                <h1 class="text-3xl font-bold mb-3">Kérjen árajánlatot egyszerűen</h1>
                <p class="mb-2">
                    Töltse ki az alábbi űrlapot, és kollégáink hamarosan felveszik Önnel a kapcsolatot.
                    Választhat szerviz vagy gumi / felni árajánlat között, attól függően, mire van szüksége.
                </p>
                <p class="mb-2">
                    Az adatok pontos megadása segít abban, hogy minél gyorsabban és pontosabban tudjunk ajánlatot készíteni.
                    Kérjük, a kötelező mezőket jelölje ki <span class="text-red-500">*</span>-gal!
                </p>
            </div>
        </div>
        <div x-data="{ tab: 'service' }" class="max-w-4xl mx-auto p-6 rounded-2xl shadow-xl" style="background-color: var(--bg-dark-secondary); color: var(--font-color-primary);">

            <!-- Ügyfél adatai -->
            <h2 class="text-2xl font-bold mb-6" style="color: var(--secondary-color);">Érdeklődő adatai</h2>
            <form action="#" method="POST" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium">Név <span class="text-red-500">*</span></label>
                        <input type="text" name="name" required class="w-full mt-1 border border-gray-700 rounded-lg p-3 focus:ring-2 focus:outline-none" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Telefon <span class="text-red-500">*</span></label>
                        <input type="tel" name="phone" required class="w-full mt-1 border border-gray-700 rounded-lg p-3 focus:ring-2 focus:outline-none" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                    <div class="md:col-span-2">
                        <label class="block text-sm font-medium">Email <span class="text-red-500">*</span></label>
                        <input type="email" name="email" required class="w-full mt-1 border border-gray-700 rounded-lg p-3 focus:ring-2 focus:outline-none" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                </div>

                <!-- Tabs -->
                <div class="flex space-x-4 mt-8">
                    <button type="button" @click="tab = 'service'" :class="tab === 'service' ? 'text-white' : 'text-gray-300'" class="px-5 py-2 rounded-lg font-medium transition cursor-pointer" :style="tab === 'service' ? 'background-color: var(--secondary-color);' : 'background-color:#2a2929;'">
                        Szerviz árajánlat
                    </button>
                    <button type="button" @click="tab = 'wheels'" :class="tab === 'wheels' ? 'text-white' : 'text-gray-300'" class="px-5 py-2 rounded-lg font-medium transition cursor-pointer" :style="tab === 'wheels' ? 'background-color: var(--secondary-color);' : 'background-color:#2a2929;'">
                        Gumi / Felni árajánlat
                    </button>
                </div>

                <!-- Szerviz árajánlat -->
                <div x-show="tab === 'service'" class="mt-6 space-y-5">
                    <h3 class="text-lg font-semibold" style="color: var(--secondary-color);">Szerviz adatok</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block text-sm font-medium">Autó típusa <span class="text-red-500">*</span></label>
                            <input type="text" name="car_type" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Évjárat <span class="text-red-500">*</span></label>
                            <input type="text" name="year" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Motorkód <span class="text-red-500">*</span></label>
                            <input type="text" name="engine_code" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Alvázszám <span class="text-red-500">*</span></label>
                            <input type="text" name="vin" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Teljesítmény (LE) <span class="text-red-500">*</span></label>
                            <input type="text" name="power" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Üzemanyag <span class="text-red-500">*</span></label>
                            <select name="fuel" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                                <option value="">Válassz...</option>
                                <option value="benzin">Benzin</option>
                                <option value="diesel">Dízel</option>
                                <option value="hybrid">Hibrid</option>
                                <option value="electric">Elektromos</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Kivitel <span class="text-red-500">*</span></label>
                            <input type="text" name="body_type" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                        </div>
                        <div>
                            <label class="block text-sm font-medium">Ajtók száma <span class="text-red-500">*</span></label>
                            <input type="number" name="doors" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                        </div>
                    </div>

                    <!-- Message teljes szélességben -->
                    <div class="mt-4">
                        <label class="block text-sm font-medium">Üzenet</label>
                        <textarea name="message" rows="3" class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);"></textarea>
                    </div>
                </div>

                <!-- Gumi / Felni árajánlat -->
                <div x-show="tab === 'wheels'" class="mt-6 space-y-5">
                    <h3 class="text-lg font-semibold" style="color: var(--secondary-color);">Gumi / Felni adatok</h3>
                    <div>
                        <label class="block text-sm font-medium">Méret (pl. 205/55 R16) <span class="text-red-500">*</span></label>
                        <input type="text" name="tire_size" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Márka preferencia</label>
                        <input type="text" name="brand_preference" class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                    </div>
                    <div>
                        <label class="block text-sm font-medium">Új vagy használt <span class="text-red-500">*</span></label>
                        <select name="condition" required class="w-full mt-1 border border-gray-700 rounded-lg p-3" style="background-color:#2a2929; color: var(--font-color-primary);">
                            <option value="">Válassz...</option>
                            <option value="new">Új</option>
                            <option value="used">Használt</option>
                        </select>
                    </div>
                </div>

                <!-- Submit -->
                <div class="pt-6">
                    <button type="submit" class="w-full py-3 rounded-lg font-semibold transition cursor-pointer" style="background-color: var(--secondary-color); color: white;" onmouseover="this.style.backgroundColor='var(--secondary-color-hover)'" onmouseout="this.style.backgroundColor='var(--secondary-color)'">
                        Árajánlat kérése
                    </button>
                </div>
            </form>
        </div>

    </div>
</x-layout.current_page>