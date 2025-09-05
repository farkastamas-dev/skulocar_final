<x-layout.current_page>
    <x-slot:title>
        Műhely
    </x-slot:title>
    <x-slot:subtitle>
        Szervíz
    </x-slot:subtitle>
    <x-slot:page_title>
        Referenciáink
    </x-slot:page_title>
    <x-slot:page_img>
        <img src="{{ Vite::asset('resources/images/img03.jpg') }}" class="object-cover h-full w-full">
    </x-slot:page_img>
    <div class="mx-auto max-w-7xl">
        <div class="mb-16 text-center">
            <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">Tekintse meg szervíz műhelyünk referenciáit</h2>
            <p class="mx-auto max-w-4xl text-lg leading-relaxed">
                SKULOCAR szervizében minden autó típusra és márkára szakosodott szakértő csapatunk dolgozik.
                Modern diagnosztikai eszközökkel, minőségi alkatrészekkel és 10+ év szakmai tapasztalattal
                biztosítjuk autójának megbízható és tartós javítását.
            </p>
        </div>
    </div>
    <div class="columns-1 md:columns-3 gap-4 max-w-7xl mx-auto" id="gallery">
        <a data-fslightbox="gallery" href="{{ Vite::asset('resources/images/car_service/img01.jpg') }}">
            <img src="{{ Vite::asset('resources/images/car_service/img01.jpg') }}" alt="Image" class="mb-4 rounded-lg w-full">
        </a>
        <a data-fslightbox="gallery" href="{{ Vite::asset('resources/images/car_service/img02.jpg') }}">
            <img src="{{ Vite::asset('resources/images/car_service/img02.jpg') }}" alt="Image" class="mb-4 rounded-lg w-full">
        </a>
        <a data-fslightbox="gallery" href="{{ Vite::asset('resources/images/car_service/img03.jpg') }}">
            <img src="{{ Vite::asset('resources/images/car_service/img03.jpg') }}" alt="Image" class="mb-4 rounded-lg w-full">
        </a>
        <a data-fslightbox="gallery" href="{{ Vite::asset('resources/images/car_service/img04.jpg') }}">
            <img src="{{ Vite::asset('resources/images/car_service/img04.jpg') }}" alt="Image" class="mb-4 rounded-lg w-full">
        </a>
        <a data-fslightbox="gallery" href="{{ Vite::asset('resources/images/car_service/img05.jpg') }}">
            <img src="{{ Vite::asset('resources/images/car_service/img05.jpg') }}" alt="Image" class="mb-4 rounded-lg w-full">
        </a>
        <a data-fslightbox="gallery" href="{{ Vite::asset('resources/images/car_service/img06.jpg') }}">
            <img src="{{ Vite::asset('resources/images/car_service/img06.jpg') }}" alt="Image" class="mb-4 rounded-lg w-full">
        </a>
    </div>
</x-layout.current_page>