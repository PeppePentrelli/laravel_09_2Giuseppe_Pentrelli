<x-layout>
    <x-navbar></x-navbar>
    <header class="header-custom-1 vh-100 container-fluid">
        <div class="row h-100">
            <div data-aos="fade-right" class="col-12 d-flex align-items-center justify-content-center flex-column">

                <img class="img-fluid img-header" src="Media/fortnite-logo-header.png" alt="">
                <h2 class="text-center h1 text-white">IL BLOG</h2>

            </div>

            <div class="vh-100"></div>

        </div>
    </header>


    <div class="wave">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#A0E1F2" d="M0,64L1440,128L1440,320L0,320Z"></path>
        </svg>
    </div>

    <x-TornaSu></x-TornaSu>


<section
    class="d-flex flex-column flex-md-row vh-100 align-items-center justify-content-center position-relative overflow-hidden sezione-contest-home px-3 px-md-0"
    data-aos="zoom-in" data-aos-duration="1200"
    style="min-height: 600px; max-height: 100vh;">

    <img 
        class="img-fluid mb-4 mb-md-0" 
        style="max-width: 120px; width: 25vw; max-width: 100px;" 
        src="/Media/newIcon.png" alt="Icona Contest">
<div class="text-center text-white position-relative z-1 text-glass p-3 p-md-4"
     data-aos="fade-up" data-aos-delay="300" style="max-width: 600px; font-size: 1rem;">



    <span class="badge bg-danger mb-3 d-inline-block text-corner2">🚨 NOVITÀ — Contest a tempo limitato</span>

    <h2 class="fw-bold text-corner">Partecipa al Contest Esclusivo!</h2>

    <p class="lead text-corner2">Carica la tua immagine, sfida la community e vinci premi unici. Hai tempo fino a:</p>

    <div id="countdown" class="mb-3 text-corner2"></div>

    <details class="mt-3 text-center text-corner2" style="max-width: 500px; margin: 0 auto;">
        <summary><strong>Leggi il regolamento del concorso</strong></summary>
        <p>
            • Ogni utente può partecipare con 1 foto<br>
            • La foto deve rispettare il tema...<br>
            • La più votata entro il 15/06 vincerà un premio digitale...
        </p>
        <a class="text-warning" style="text-decoration: none;" href="{{ route('paginaRegolamento') }}">
            Visualizza regolamento completo
        </a>
    </details>

    <a href="{{ route('paginaContest') }}" class="btn btn-warning btn-lg mt-4">
        Scopri il Contest
    </a>
</div>

</section>


    <section
        class=" sezione-armi-home  text-glass vh-100 d-flex align-items-center justify-content-center position-relative overflow-hidden"
        data-aos="zoom-in" data-aos-duration="1200">
    
        <video autoplay muted loop playsinline
            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
            <source src="/Media/Skin/Video/video-presentazione.mp4" type="video/mp4">

        </video>


        <div class="text-center text-white position-relative linea-movimento z-1 text-glass" data-aos="fade-up"
            data-aos-delay="300">

            <!-- Contenuto in primo piano -->
            <div class="text-center text-white position-relative z-1" data-aos="fade-up" data-aos-delay="300">
                <h1 class="display-4 fw-bold">Esplora il Potere delle Armi</h1>
                <p class="lead">Senti l'energia delle armi più potenti del mondo!</p>
                <a href="{{ route('paginaArmi') }}" class="btn btn-outline-light mt-3">Scopri le armi</a>
            </div>
    </section>
    </div>



    <div class="wave">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#A0E1F2" d="M0,64L1440,128L1440,320L0,320Z"></path>
        </svg>
    </div>


    <section
        class="vh-100 d-flex align-items-center justify-content-center position-relative bg-cover bg-center presentazione-skin-home"
        data-aos="zoom-in" data-aos-duration="1200">
        <div class="text-center text-white  div-lead" data-aos="fade-up" data-aos-delay="300">
            <h1 class="display-4 fw-bold">Scopri tutte le Skin</h1>
            <p class="lead">Con video, dettagli e molto altro!</p>
            <a href="{{ route('paginaSkin') }}" class="btn btn-outline-light mt-3">Vai alla collezione</a>
        </div>
    </section>


    <div class="wave">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#A0E1F2" d="M0,64L1440,128L1440,320L0,320Z"></path>
        </svg>
    </div>



    <section data-aos="zoom-in" data-aos-duration="1200"
        class="bundle-promo-section d-flex justify-content-center align-items-end text-center bg-light py-5"
        style="height: 100vh;">
        <div class="container justify-content-center d-flex">

            <div style="width: max-content"
                class="text-center text-white position-relative linea-movimento z-1 text-glass">
                <p class="lead mb-4">
                    Risparmia e ottieni di più con le nostre combinazioni di prodotti pensate per te.
                </p>
                <a href="{{ route('paginaBundle') }}" class="btn btn-outline-warning btn-lg">Esplora i Bundle</a>
                <h2 class="mt-4">Scopri i Nostri Bundle Esclusivi</h2>
            </div>
        </div>
    </section>



    <section
        class=" sezione-armi-home  text-glass vh-100 d-flex align-items-end justify-content-center position-relative overflow-hidden"
        data-aos="zoom-in" data-aos-duration="1200">
    
        <video autoplay muted loop playsinline preload="auto"
            class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover z-n1">
            <source src="/Media/progetto-presentazioneBundle.mp4" type="video/mp4">

        </video>

      
        <div class="text-center text-white position-relative linea-movimento z-1 text-glass" data-aos="fade-up"
            data-aos-delay="300">

            <!-- Contenuto in primo piano -->
            <div class="text-center text-white position-relative z-1" data-aos="fade-up" data-aos-delay="300" >
                <h1 class="display-4 fw-bold">Unisciti alla nostra Community!!</h1>
                <p class="lead fs-4">Crea discussioni,trova nuovi amici e tanto altro!!</p>
                <a href="{{ route('paginaCommunity') }}" class="btn btn-outline-light mt-3">Unisciti</a>
            </div>
    </section>





    {{-- form --}}

    <section class="form-section my-5 section-form formFortnite">
        <div class="container text-white">


            <div class="text-center mb-4">
                <img src="/Media/top-secret-img.png" alt="Immagine scritta Top Secret" style="height: 60px;">
                <p class="text-white mt-2">Solo per veri campioni della Vittoria Reale</p>
            </div>

            <div class="row align-items-center justify-content-center">

                <!-- FORM -->
                <div class="col-md-6" data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="100"
                    data-aos-offset="0">
                    <h2 class="mb-4 text-yellow text-center">Iscriviti alla Battaglia!</h2>


                    @if (session('message'))
                        <div class="alert alert-success text-center" style="font-size: clamp(16px, 7vw, 40px);">
                            {{ session('message') }} <img class="img-fluid" src="/Media/Victory.png" alt="">
                        </div>
                    @endif


                    <form id="formFortnite" class="fortnite-form mx-auto" style="" method="POST"
                        action="{{ route('send_email') }}#formFortnite">
                        @csrf
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errore)
                <li>{{ $errore }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        <div class="mb-3 mt-5">
                            <input type="text" name="name" class="form-control form-fortnite fs-4"
                                placeholder="Nome giocatore" >
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control form-fortnite fs-4"
                                placeholder="Email" >
                        </div>
                        <div class="mb-3">
                            <textarea name="description" class="form-control form-fortnite fs-4" rows="4" placeholder="Scrivi un messaggio..."
                                ></textarea>
                        </div>
                        <div class="row justify-content-center d-flex">
                            <div class="text-center mt-3">
                                <button type="submit" class="btn-form">Invio</button>
                            </div>
                            <div class="col-7"><img src="/Media/battle-bus.png" alt="#1"
                                    style="height: auto ; width: 200px;"></div>
                        </div>
                    </form>



                </div>
            </div>
    </section>


    <div class="wave">
        <svg viewBox="0 0 1440 150" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="#A0E1F2" d="M0,64L1440,128L1440,320L0,320Z"></path>
        </svg>
    </div>


    <x-footer></x-footer>


    </div>
</x-layout>
