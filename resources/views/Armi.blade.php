<x-layout>
    <x-navbar></x-navbar>
    <h1 class="text-center">Armi</h1>


    <section class="container my-4 ">
        <div class="row g-4">
            @foreach ($armi as $arma)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card arma-card text-white shadow"
                        style="background-image: url({{ $arma['img-bg-card'] }});" data-aos="fade-up">
                        <img src="{{ $arma['img'] }}" class="card-img-top p-3 rounded-4" alt="Arma">
                        <div class="card-body text-center">
                            <h5 class="card-title fw-bold">{{ $arma['nome'] }}</h5>

                            <div class="d-flex justify-content-between align-items-center my-2 px-2">
                                <div class="img-container me-1">
                                    <img src="{{ $arma['img-stars'] }}" alt="Stelle">
                                </div>
                                <div class="img-container ms-1">
                                    <img src="{{ $arma['img-rarity'] }}" alt="Rarità">
                                </div>
                            </div>

                            <div class="d-flex justify-content-center">
                                <a href="{{ route('paginaDettaglioArmi', ['id' => $arma['id']]) }}"
                                    class="btn btn-fortnite">
                                    <img src="/Media/details-button.png" alt="Dettagli" class="img-fluid">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <x-TornaSu></x-TornaSu>

    <x-footer></x-footer>

</x-layout>
