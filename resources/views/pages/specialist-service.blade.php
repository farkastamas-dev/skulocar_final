<x-layout.current_page>
    <x-slot:title>
        Szakszervíz
    </x-slot:title>
    <x-slot:subtitle>
        Szervíz
    </x-slot:subtitle>
    <x-slot:page_title>
        Szakszervíi
    </x-slot:page_title>
    <x-slot:page_img>
        <img src="{{ Vite::asset('resources/images/img03.jpg') }}" class="object-cover h-full w-full">
    </x-slot:page_img>
    <div class="mx-auto max-w-7xl">
        <div class="mb-16 text-center">
            <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">Szakszerviz szolgáltatásaink</h2>
            <p class="mx-auto text-lg leading-relaxed">
                Független szakszervizünkben képzett szerviztechnikusokból álló csapat várja, hogy segítsen gépjárművével kapcsolatos bármilyen igényében.
            </p>
        </div>
        <div class="mb-16 grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
            <!-- Hero Image -->
            <div class="order-2 lg:order-1">
                <div class="overflow-hidden rounded-lg shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1563720223185-11003d516935?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Professzionális autószervíz" class="h-96 w-full object-cover">
                </div>
            </div>

            <!-- Services Overview -->
            <div class="order-1 lg:order-2">
                <h3 class="mb-6 text-2xl font-bold text-white">Miért Válasszon Minket?</h3>
                <div class="space-y-4">
                    <div class="flex items-start space-x-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white">Szakértő Csapat</h4>
                            <p class="">10+ év tapasztalattal rendelkező szakemberek minden autó típusra</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white">Modern Eszközök</h4>
                            <p class="">Legújabb diagnosztikai és javítási eszközök minden márkához</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4">
                        <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                            <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                            </svg>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold text-white">Kedvező Árak</h4>
                            <p class="">Versenyképes árakat kínálunk minőségi szolgáltatásért</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <main class="services py-5">
        <x-parents.services />
    </main> --}}
</x-layout.current_page>