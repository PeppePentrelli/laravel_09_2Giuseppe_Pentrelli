<x-layout>
    <x-navbar></x-navbar>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-6 video-container">
                <video id="mainVideo" src="{{ asset($skin['video']) }}" autoplay muted loop></video>
                <div class="row">
                    <div class="col-12 justify-content-center">

                        <h2 class=" mt-3 text-center text-white text-target">Stili Selezionabili</h2>
                    </div>
                    @foreach ($skin['stili'] as $stile)
                        <div class="mb-4 container-style col-3 mt-3" data-aos="zoom-in" title="{{ $stile['nome'] }}">
                            <img src="{{ asset($stile['img']) }}" alt="{{ $stile['nome'] }}"
                                class="img-fluid img-style stile-thumb" data-video="{{ asset($stile['video']) }}"
                                data-nome="{{ $stile['nome'] }}">
                        </div>
                    @endforeach
                </div>
            </div>



            <div class="col-12 col-md-6 description-skin-container"data-aos="fade-right">
                <h1 class="text-center">{{ $skin['nome'] }}</h1>
                <h3 class="text-center text-yellow" id="nomeStile">[ {{ $skin['stili'][0]['nome'] }} ]</h3>
                <h3 class="text-center text-white"> {{ $skin['descrizione'] }}</h3>

                <div class="style-line"></div>
                <ol class="skin-list">
                    <li class="rarity-center"><img class="rarity-img-skin" src="{{ $skin['img-rarity'] }}"
                            alt=""></li>

                    <li class="mt-2">
                        <span class="skin-label">Fonte:</span>
                        <span class="skin-value">{{ $skin['fonte'] }} @if ($skin['check'] === true)
                                <img class="img-logo-pass" src="/Media/logoPassBattaglia.png" alt="">
                            @endif
                        </span>
                    </li>

                    <li class="mt-4">
                        <span class="skin-label">Set:</span>
                        <span class="skin-value">{{ $skin['set'] }}</span>
                    </li>

                    <li class="mt-4">
                        <span class="skin-label">Costo:</span>
                        <span class="skin-value">{{ $skin['costo'] }}</span>
                    </li>

                    <li class="mt-4">
                        <span class="skin-label">Introdotto in:</span>
                        <span class="skin-value">{{ $skin['introdotto_in'] }}</span>
                    </li>

                    <li class="mt-4">
                        <span class="skin-label">Data di rilascio:</span>
                        <span class="skin-value">{{ $skin['data'] }}</span>
                    </li>

                    <li class="mt-4">
                        <span class="skin-label">Liste desideri:</span>
                        <span class="skin-value">{{ $skin['wishlist'] }}</span>
                    </li>

                </ol>
            </div>
        </div>


    </div>
    <x-TornaIndietro></x-TornaIndietro>




    <x-footer></x-footer>

</x-layout>
