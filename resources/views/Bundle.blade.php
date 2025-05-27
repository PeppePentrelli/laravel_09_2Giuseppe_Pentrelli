<x-layout>
    <x-navbar></x-navbar>



    <section class="container-fluid bg-bundle-page">
        @foreach ($bundles as $bundle)
            <div style="{{ $bundle['bg'] }}" class="container bundle1-container mt-5" data-aos="flip-up">
                <div class="text-center">
                    <h2 class="mt-2 text-white">FORTNITE®</h2>
                    <h3 style="{{ $bundle['h2'] }}" class="mt-2 ">{{ $bundle['nome'] }}</h3>
                </div>
                <div class="row align-items-center flex-column flex-md-row mt-4">
                    <!-- Bundle Items a sinistra (col-md-6) -->
                    <div class="col-md-5 mx-2 my-2 mb-4 mb-md-0">
                        <div class="row justify-content-center bundle-items-wrapper justify-content-center mx-auto">
                            <div class="col-5 mx-2 my-2 bundle-item-container">
                                <img class="item1-bundle1" src="/Media/{{ $bundle['item1-Bundle'] }}" alt="">
                            </div>
                            <div class="col-5 mx-2 my-2 bundle-item-container">
                                <img class="item1-bundle1" src="/Media/{{ $bundle['item2-Bundle'] }}" alt="">
                            </div>
                            <div class="col-5 mx-2 my-2 bundle-item-container">
                                <img class="item1-bundle1" src="/Media/{{ $bundle['item3-Bundle'] }}" alt="">
                            </div>
                            <div class="col-5 mx-2 my-2 bundle-item-container">
                                <img class="item1-bundle1" src="/Media/{{ $bundle['item4-Bundle'] }}" alt="">
                                <p class="text-white mt-1 ">{{ $bundle['guadagno'] }}</p>
                            </div>
                        </div>
                    </div>

                    <!-- Immagine grande a destra -->

                    <div class="col-md-6 d-flex justify-content-center align-items-end mx-0">
                        <div class="img-wrapper-bundle1">
                            <img style="{{ $bundle['cheat'] }}" class="img-bundle1 justify-content-start d-flex"
                                src="/Media/{{ $bundle['img-bundle1'] }}" alt="Personaggio">
                        </div>
                    </div>
                </div>


                <!-- Bottone e prezzo -->
                <div class="row justify-content-between align-items-center mt-5">
                    <div class="col-3"></div>
                    <div class="col-6 d-flex justify-content-center">
                        <button class="btn-bundle1">Acquista</button>
                    </div>
                    <div class="col-3 d-flex justify-content-end">
                        <h3 class="text-white">{{ $bundle['prezzo'] }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <x-TornaSu></x-TornaSu>



    <section
        class="section-remember-sign-in d-flex align-items-center justify-content-center text-center text-white py-5 px-3">
        <div class="div-remember w-100" style="max-width: 600px;">
            <h2 class="fw-bold glow-text mb-3" style="font-size: 2rem;">Non ti sei ancora iscritto?</h2>
            <h3 class="mb-4" style="font-size: 1.2rem;">Che aspetti?! Unisciti alla community!</h3>

            <form id="iscrizione" method="POST" action="{{ route('send_email') }}">
                @csrf
                <div class="mb-3">
                    <input type="text" name="name" class="form-control form-fortnite2 text-white"
                        placeholder="Nome giocatore" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control form-fortnite2 text-white"
                        placeholder="Email" required>
                </div>
                <div class="mb-3">
                    <textarea name="description" class="form-control form-fortnite2 text-white" rows="4"
                        placeholder="Scrivi un messaggio..." required></textarea>
                </div>

                <div class="d-grid gap-2 mt-3">
                    <button type="submit" class="btn btn-outline-light px-4 py-3 neon-button">Iscriviti Ora</button>
                </div>

                <div class="text-center mt-4">
                    <img src="/Media/battle-bus.png" alt="Immagine bus della battaglia" class="img-fluid"
                        style="max-width: 200px;">
                </div>
            </form>
        </div>
    </section>




    <x-footer></x-footer>
</x-layout>
