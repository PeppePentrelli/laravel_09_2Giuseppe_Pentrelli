<div class="container-fluid"data-aos="zoom-in-left">
    <div class="row justify-content-end">
        <div class="col-6 justify-content-end d-flex">
            <a
                href="{{ Route::currentRouteName() === 'paginaDettaglioArmi' ? route('paginaArmi') : (Route::currentRouteName() === 'paginaDettaglioSkin' ? route('paginaSkin') : '#') }}">
                <div class="turnBackFumetto">
                    <img class="turnBackFumetto" src="/Media/TornaSuFumetto.png" alt="">

                </div>
                <div class="turnBack-img">
                    <img class="turnBack" src="/Media/TornaSuIcon.png" alt="">
                </div>
            </a>
        </div>
    </div>
</div>
