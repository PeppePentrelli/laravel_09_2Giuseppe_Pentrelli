<x-layout>

    <x-navbar></x-navbar>


    {{-- !non cacellare perche rimuove il bg-fixed --}}
    <style>
        .fade-in {
            animation: none !important;
            opacity: 1 !important;
        }
    </style>



    <section class="container-fluid  section-page-skins  ">

        <h1 class="text-center" style="text-shadow: 2px 2px 5px #333;">SKIN</h1>
        <div class="container">
            <div class="row ">
                @foreach ($skins as $skin)
                    <div
                        class="col-3 my-5 justify-content-center align-items-center d-flex flex-column div-skin-wrapper">
                        <a href="{{ route('paginaDettaglioSkin', ['id' => $skin['id']]) }}">

                            <img class="img-fluid div-skin-container" src="{{ $skin['img'] }}" alt="">
                        </a>

                    </div>
                @endforeach

            </div>
        </div>
        <x-TornaSu></x-TornaSu>
    </section>
    <div class="wave">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg"
            style="transform: scaleY(-1);">
            <path fill="#A0E1F2" d="M0,64L1440,128L1440,320L0,320Z"></path>
        </svg>
    </div>



    <x-footer></x-footer>
</x-layout>
