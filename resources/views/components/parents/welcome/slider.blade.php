<div class="hero-section">
    <div class="swiper heroSwiper relative h-[350px] w-full lg:h-[750px]">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide relative">
                <!-- Háttérkép -->
                <img src="{{ Vite::asset('resources/images/img01.jpg') }}" class="absolute inset-0 h-full w-full object-cover" loading="lazy" />
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                <!-- Szöveg doboz -->
                <div class="relative z-10 mx-auto flex h-full max-w-7xl flex-col items-center justify-center lg:items-start">
                    <div class="max-w-3xl rounded-2xl bg-black/35 p-6 text-white">
                        <!-- Cím -->
                        <h1 class="text-center text-2xl font-bold lg:text-left lg:text-5xl">Gépjármű alkatrészek</h1>
                        <!-- Szöveg -->
                        <p class="mt-4 hidden text-base lg:block lg:text-lg">Autód megbízhatósága a megfelelő alkatrészeken múlik. Nálunk minden fontos elemet megtalálsz, legyen szó kopó alkatrészekről vagy speciális megoldásokról. Kiváló minőséget kínálunk, hogy járműved hosszú távon is biztonságosan szolgáljon.</p>
                        <!-- Gomb -->
                        <button class="cursor-ponter mt-6 hidden cursor-pointer rounded bg-[var(--secondary-color)] px-6 py-3 font-semibold text-white transition duration-300 hover:bg-[var(--secondary-color-hover)] lg:inline-block">
                            Kattints ide
                        </button>
                    </div>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="swiper-slide relative">
                <!-- Háttérkép -->
                <img src="{{ Vite::asset('resources/images/img02.jpg') }}" class="absolute inset-0 h-full w-full object-cover" loading="lazy" />
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                <!-- Szöveg doboz -->
                <div class="relative z-10 mx-auto flex h-full max-w-7xl flex-col items-center justify-center lg:items-start">
                    <div class="max-w-3xl rounded-2xl bg-black/35 p-6 text-white">
                        <!-- Cím -->
                        <h1 class="text-center text-2xl font-bold lg:text-left lg:text-5xl">Kiegészítők minden autóhoz</h1>
                        <!-- Szöveg -->
                        <p class="mt-4 hidden text-base lg:block lg:text-lg">Az autózás kényelmesebb és élvezetesebb lehet a megfelelő kiegészítőkkel. Válassz praktikus megoldásaink közül, amelyek megkönnyítik a mindennapi utazást. Stílusos, hasznos és tartós kiegészítők várnak, hogy autód még inkább a sajátoddá váljon.</p>
                        <!-- Gomb -->
                        <button class="cursor-ponter mt-6 hidden cursor-pointer rounded bg-[var(--secondary-color)] px-6 py-3 font-semibold text-white transition duration-300 hover:bg-[var(--secondary-color-hover)] lg:inline-block">
                            Kattints ide
                        </button>
                    </div>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="swiper-slide relative">
                <!-- Háttérkép -->
                <img src="{{ Vite::asset('resources/images/img03.jpg') }}" class="absolute inset-0 h-full w-full object-cover" loading="lazy" />
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                <!-- Szöveg doboz -->
                <div class="relative z-10 mx-auto flex h-full max-w-7xl flex-col items-center justify-center lg:items-start">
                    <div class="max-w-3xl rounded-2xl bg-black/35 p-6 text-white">
                        <!-- Cím -->
                        <h1 class="text-center text-2xl font-bold lg:text-left lg:text-5xl">Gyors és rugalmas kiszolgálás</h1>
                        <!-- Szöveg -->
                        <p class="mt-4 hidden text-base lg:block lg:text-lg">Tudjuk, hogy az időd értékes, ezért kiemelt figyelmet fordítunk a gyors ügyintézésre. Rendeléseidet rugalmasan és pontosan dolgozzuk fel, hogy minél hamarabb kézhez kapd, amire szükséged van. Csapatunk mindig készséggel áll rendelkezésedre kérdéseid és igényeid megoldásában.</p>
                        <!-- Gomb -->
                        <button class="cursor-ponter mt-6 hidden cursor-pointer rounded bg-[var(--secondary-color)] px-6 py-3 font-semibold text-white transition duration-300 hover:bg-[var(--secondary-color-hover)] lg:inline-block">
                            Kattints ide
                        </button>
                    </div>
                </div>
            </div>
            <!-- Slide 4 -->
            <div class="swiper-slide relative">
                <!-- Háttérkép -->
                <img src="{{ Vite::asset('resources/images/img04.jpg') }}" class="absolute inset-0 h-full w-full object-cover" loading="lazy" />
                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                <!-- Szöveg doboz -->
                <div class="relative z-10 mx-auto flex h-full max-w-7xl flex-col items-center justify-center lg:items-start">
                    <div class="max-w-3xl rounded-2xl bg-black/35 p-6 text-white">
                        <!-- Cím -->
                        <h1 class="text-center text-2xl font-bold lg:text-left lg:text-5xl">Minőség, amiben bízhatsz</h1>
                        <!-- Szöveg -->
                        <p class="mt-4 hidden text-base lg:block lg:text-lg">Hosszú évek tapasztalatával válogatjuk össze kínálatunkat. Csak olyan termékeket kínálunk, amelyek valóban kiállják a mindennapi használat próbáját. Célunk, hogy biztonságban, nyugodtan és elégedetten közlekedhess, bármilyen útra indulsz is.</p>
                        <!-- Gomb -->
                        <button class="cursor-ponter mt-6 hidden cursor-pointer rounded bg-[var(--secondary-color)] px-6 py-3 font-semibold text-white transition duration-300 hover:bg-[var(--secondary-color-hover)] lg:inline-block">
                            Kattints ide
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper vezérlők -->
        <div class="swiper-button-next pr-5 !text-[var(--secondary-color)] lg:pr-10"></div>
        <div class="swiper-button-prev pl-5 !text-[var(--secondary-color)] lg:pl-10"></div>
        <div class="swiper-pagination !text-[var(--secondary-color)]"></div>
    </div>
</div>