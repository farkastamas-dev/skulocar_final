<x-layout.current_page>
    <x-slot:title>
        Autóalkatrész
    </x-slot:title>
    <x-slot:page_title>
        Alkatrészek
    </x-slot:page_title>
    <x-slot:page_img>
        <img src="{{ Vite::asset('resources/images/img03.jpg') }}" class="object-cover h-full w-full">
    </x-slot:page_img>

    <div class="mx-auto max-w-7xl">
        <div class="mb-16 text-center">
            <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">Alkatrészek minden igényre</h2>
            <p class="mx-auto max-w-4xl text-lg leading-relaxed">
                Minőségi és megbízható alkatrészek széles választéka várja Önt. Legyen szó motoralkatrészről, fékrendszerről vagy futóműről, nálunk mindig megtalálja, amire szüksége van. Az autója mindig csúcsformában lesz, ráadásul a beszerzés gyors és egyszerű.
            </p>
        </div>
        <div class="carpart-list justify-center flex">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                <article class="bg-white/10 rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/car_parts/service-1.png') }}" alt="Autó motor" class="w-full h-44 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Autóalkatrész</h3>
                        <p class="text-sm mt-1">Boltunk széles választékban kínál gyári és magasan kvalifikált utángyártott alkatrészeket minde típushoz. Fontos számunkra a megbízhatóság, magas színvolnalon történő gyors, és pontos kiszolgálás.</p>
                    </div>
                </article>
                <article class="bg-white/10 rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/car_parts/service-3.png') }}" alt="Fék" class="w-full h-44 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Autó ápolás</h3>
                        <p class="text-sm mt-1">Nálunk megtalálható minden ami a szalonszínvonalú otthoni autóápoláshoz elengedhetetlen, külső-belső tisztítószerek, szettek, ápolószerek, viaszok, karceltávolító, páramentesítők, illatosítók ... Beszállítónk többek között a SONAX, LOTUS és K2 </p>
                    </div>
                </article>
                <article class="bg-white/10 rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/car_parts/2.png') }}" alt="Kerék" class="w-full h-44 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Egyedi üléshuzat</h3>
                        <p class="text-sm mt-1">Vállaljuk egyedi üléshuzatok és egyedi autószőnyek elkészítését az összes gépjármű tipusra. Érdeklődjön elérhetőségünk bármelyikén..</p>
                    </div>
                </article>
                <article class="bg-white/10 rounded-2xl shadow-sm hover:shadow-md transition-shadow overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/car_parts/car_roof_box.jpg') }}" alt="Akkumulátor" class="w-full h-44 object-cover" />
                    <div class="p-4">
                        <h3 class="font-semibold">Tetőbox bérlés</h3>
                        <p class="text-sm mt-1">Alkalmankénti utazásaihoz béreljen nálunk tetőboxot. Megbízható kölcsönzés 1000 Ft/nap áron. </p>
                    </div>
                </article>
            </div>
        </div>
        <div class="text-center mt-10">
            <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
                <button class="cursor-pointer rounded-lg border-2 border-[var(--secondary-color)] px-8 py-4 font-semibold text-[var(--secondary-color)] transition-colors hover:bg-[var(--secondary-color-hover)] hover:text-white">
                    <a href="{{ route('kapcsolat') }}">Ajánlatot kérek</a>
                </button>
            </div>
        </div>
    </div>
</x-layout.current_page>