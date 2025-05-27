<x-layout>
    <x-navbar></x-navbar>
    <div class="container my-4">
        <h1 class="text-center mb-4">{{ $arma['nome'] }}</h1>
        <h2 class="text-center">{{ $arma['descrizione'] }}</h2>

        <div class="row justify-content-center g-4">
            @foreach ($arma['varianti'] as $variante)
                @php
                    $tempoPercent = ($variante['tempo_ricarica'] / $maxTempoRicarica) * 100;
                @endphp
                <div class="col-11 col-sm-8 col-md-5 col-lg-3">
                    <div class="card variante-card h-100"
                        style="background-image: url('{{ isset($variante['img-bg-card']) ? asset($variante['img-bg-card']) : asset('Media/bg-card-default.png') }}');"
                        data-aos="fade-right">

                        <img src="{{ asset($variante['immagine']) }}" class="card-img-top" alt="{{ $variante['alt'] }}">

                        <div class="card-body d-flex flex-column justify-content-between">
                            <h5 class="card-title text-center">{{ $variante['rarità'] }}</h5>

                            <div class="d-flex justify-content-between align-items-center px-2 my-2">
                                <div class="img-container">
                                    <img src="{{ isset($variante['img-stars']) ? asset($variante['img-stars']) : asset('Media/img-stars') }}"
                                        alt="Stelle">
                                </div>
                                <div class="img-container">
                                    <img src="{{ isset($variante['img-rarity']) ? asset($variante['img-rarity']) : asset('Media/img-rarity') }}"
                                        alt="Rarità">
                                </div>
                            </div>

                            <p class="card-text">Danno: {{ $variante['danno'] }}</p>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-info"
                                    style="width: {{ ($variante['danno'] / $maxDanno) * 100 }}%"></div>
                            </div>

                            <p class="card-text">Danno strutture: {{ $variante['danno_strutture'] }}</p>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-info"
                                    style="width: {{ ($variante['danno_strutture'] / $maxDannoStrutture) * 100 }}%">
                                </div>
                            </div>

                            <p class="card-text">Cadenza di fuoco: {{ $variante['cadenza_fuoco'] }}</p>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-info"
                                    style="width: {{ ($variante['cadenza_fuoco'] / $maxCadenza) * 100 }}%"></div>
                            </div>

                            <p class="card-text">Caricatore: {{ $variante['caricatore'] }}</p>
                            <div class="progress mb-2">
                                <div class="progress-bar bg-info"
                                    style="width: {{ ($variante['caricatore'] / $maxCaricatore) * 100 }}%"></div>
                            </div>

                            <p class="card-text">Tempo di ricarica: {{ $variante['tempo_ricarica'] }}s</p>
                            <div class="progress">
                                <div class="progress-bar bg-info" style="width: {{ $tempoPercent }}%"></div>
                            </div>
                        </div>

                        <div class="row justify-content-center align-items-center m-0 p-2">
                            <div class="col-8">
                                <h5 class="text-center">Tipo di munizioni: {{ $variante['type-ammo'] }}</h5>
                            </div>
                            <div class="col-4">
                                <img class="img-fluid" src="{{ asset($variante['type-ammo-img']) }}"
                                    alt="Icona munizione">
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <x-tornaIndietro></x-tornaIndietro>


    </div>

    <x-footer></x-footer>
</x-layout>

