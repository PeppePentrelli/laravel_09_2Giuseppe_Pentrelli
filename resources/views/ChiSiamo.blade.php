<x-layout>
    <x-navbar></x-navbar>

 



{{-- Carousel Chi Siamo --}}

<section id="carousel-chi-siamo" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">

    <!-- Slide 1: Chi siamo -->
    <div class="carousel-item active vh-100 d-flex align-items-center justify-content-center position-relative chiSiamoCarousel1">
      <div class="overlay"></div>
      <div class="text-center text-white text-glass z-1" data-aos="fade-up">
        <h1 class="display-4 fw-bold">Chi Siamo</h1>
        <p class="lead">Una community nata dalla passione per il gioco e la condivisione.</p>
        <a href="#chiSono" class="btn btn-outline-light mt-3">Scopri il nostro team</a>
      </div>
    </div>

    <!-- Slide 2: I Nostri Valori -->
    <div class="carousel-item vh-100 d-flex align-items-center justify-content-center position-relative chiSiamoCarousel2">
      <div class="overlay"></div>
      <div class="text-center text-white text-glass z-1 px-3" data-aos="fade-up">
        <h2 class="mb-4">I Nostri Valori</h2>
        <p class="lead mb-4">
          Inclusività, rispetto, crescita e passione sono il cuore della nostra community.
        </p>
        <a href="#valori" class="btn btn-outline-light">Scopri di più</a>
      </div>
    </div>

    <!-- Slide 3: Video Background - La Nostra Missione -->
    <div class="carousel-item vh-100 position-relative overflow-hidden chiSiamoCarousel3 d-flex align-items-center justify-content-center">


      <div class="text-center text-white position-relative z-1 text-glass px-3" data-aos="fade-up" data-aos-delay="300">
        <h1 class="display-4 fw-bold">La Nostra Missione</h1>
        <p class="lead">Collegare giocatori, creare legami e promuovere l’intrattenimento sano.</p>
        <a href="#missione" class="btn btn-outline-light mt-3">Scopri la missione</a>
      </div>
    </div>

  </div>

  <!-- Controlli -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carousel-chi-siamo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carousel-chi-siamo" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  </button>
</section>


<!-- Sezione Chi Sono -->
<section id="chiSono" class="py-5 sezione-personale">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="titolo-sezione">Chi c'è dietro</h2>
      <p class="sottotitolo-sezione">Un progetto portato avanti da una persona con passione, visione e competenze trasversali.</p>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="card personal-card shadow-lg border-0">
          <div class="card-body text-center p-5">
            <img src="/Media/peppe.png" alt="Giuseppe Pentrelli" class="rounded-circle mb-4 personal-img shadow img-fluid">

            <h2 class="nome-autore">Giuseppe Pentrelli</h2>

            <p class="ruolo-autore">Ideatore • Developer • Designer • Community Manager</p>

            <p class="descrizione-autore">
              Gestisco l’intero progetto: dal design allo sviluppo, fino alla gestione della community.
              Amo trasformare idee in realtà digitali, con attenzione a ogni dettaglio tecnico e visivo.
            </p>

            <ul class="list-unstyled text-center competenze-lista">
              <li><i class="bi bi-code-slash me-2"></i>Sviluppo web completo (frontend + backend)</li>
              <li><i class="bi bi-brush me-2"></i>UI/UX Design moderno e accessibile</li>
              <li><i class="bi bi-megaphone me-2"></i>Gestione contenuti e social</li>
              <li><i class="bi bi-lightbulb me-2"></i>Creatività, strategia e visione a lungo termine</li>
            </ul>

            <a href="#iscrizione" class="btn btn-contattami">
              <i class="bi bi-envelope-fill me-2"></i>Contattami
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!-- Sezione: Valori -->
<section id="valori" class="py-5 bg-light text-dark">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="mb-4 text-dark">I Nostri Valori</h2>
      <p class="lead">Promuoviamo inclusività, collaborazione e divertimento. Ogni membro conta!</p>
    </div>

    <div class="row text-center">
      <!-- Valore 1 -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up">
        <div class="p-4 border rounded bg-white shadow-sm h-100">
          <i class="bi bi-people-fill display-4 text-primary mb-3"></i>
          <h5 class= "fs-3 mb-4">Inclusività</h5>
          <p class="fs-4">Accogliamo ogni giocatore, indipendentemente da età, provenienza o livello di esperienza.</p>
        </div>
      </div>

      <!-- Valore 2 -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 border rounded bg-white shadow-sm h-100">
          <i class="bi bi-chat-dots-fill display-4 text-success mb-3"></i>
          <h5 class= "fs-3 mb-4">Collaborazione</h5>
          <p class="fs-4">Crediamo nella forza del lavoro di squadra e nel supporto reciproco per crescere insieme.</p>
        </div>
      </div>

      <!-- Valore 3 -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 border rounded bg-white shadow-sm h-100">
          <i class="bi bi-emoji-smile-fill display-4 text-warning mb-3"></i>
          <h5 class= "fs-3 mb-4">Divertimento</h5>
          <p class="fs-4">Giochiamo per il piacere di stare insieme e vivere esperienze memorabili.</p>
        </div>
      </div>

      <!-- Valore 4 -->
      <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
        <div class="p-4 border rounded bg-white shadow-sm h-100">
          <i class="bi bi-graph-up-arrow display-4 text-danger mb-3"></i>
          <h5 class= "fs-3 mb-4">Crescita</h5>
          <p class="fs-4">Supportiamo la crescita personale e tecnica dei membri attraverso eventi e formazione continua.</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Sezione: Missione -->
<section id="missione" class="py-5 bg-dark text-white">
  <div class="container text-center">
    <h2 class="mb-4 fs-1">La Nostra Missione</h2>
    <p class="lead mb-4 fs-3">Vogliamo creare un luogo dove i giocatori possano sentirsi accolti, ascoltati e ispirati. La nostra missione è quella di costruire una comunità forte, inclusiva e rispettosa, dove ogni membro possa esprimere la propria passione per il gioco in un ambiente positivo e stimolante.</p>
    <p class="mb-4 fs-4">Ci impegniamo a offrire esperienze uniche, creando opportunità di crescita, divertimento e apprendimento. Crediamo nel potere della collaborazione e nel fatto che ogni singolo giocatore, con la sua unicità, contribuisce a rendere la nostra community un posto migliore.</p>
    
    <!-- Obiettivi della Missione -->
    <div class="row">
      <div class="col-lg-4 mb-4">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <h5 class="card-title fs-2">Inclusività</h5>
            <p class="card-text fs-5">Accogliamo giocatori di ogni livello, background e provenienza. Il nostro obiettivo è creare un ambiente dove tutti si sentano liberi di esprimere la propria passione per il gaming.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <h5 class="card-title fs-2">Collaborazione</h5>
            <p class="card-text fs-5">Siamo convinti che il gioco sia più divertente quando si lavora insieme. La nostra missione è facilitare la creazione di squadre, l'apprendimento reciproco e la condivisione delle esperienze di gioco.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card bg-light text-dark">
          <div class="card-body">
            <h5 class="card-title fs-2">Divertimento</h5>
            <p class="card-text fs-5">Siamo qui per divertirci! La nostra missione è garantire che ogni giocatore possa divertirsi, imparare e crescere attraverso il gioco, in un ambiente sano e stimolante.</p>
          </div>
        </div>
      </div>
    </div>

    
    <div class="mt-5">
      <h4 class="mb-3">Unisciti alla nostra community!</h4>
      <p class="lead">Se anche tu credi che il gioco sia un'opportunità per crescere e divertirsi insieme, non aspettare oltre! Entra a far parte della nostra community e inizia a vivere la tua avventura!</p>
      <a href="#chiSono" class="btn btn-outline-light btn-lg">Scopri il nostro team</a>
    </div>
  </div>
    <section class=" d-flex align-items-center justify-content-center text-center text-white">
  <div class="div-remember">



    
                    @if (session('message'))
                        <div class="alert alert-success bg-dark text-white text-center mt-3" style="font-size: clamp(16px, 7vw, 40px);">
                            {{ session('message') }} <img class="img-fluid" src="/Media/Victory.png" alt="">
                        </div>
                    @endif
                    <form   id="iscrizione" class=" mx-auto" style="" method="POST"
                        action="{{ route('send_email') }}">
                        @csrf
                        <div class="mb-3 mt-5">
                            <input type="text" name="name" class="form-control my-input text-white"
                                placeholder="Nome giocatore" required  >
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control my-input text-white"
                                placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="description" class="form-control my-input text-white" rows="4" placeholder="Scrivi un messaggio..."
                                required></textarea>
                        </div>
                        <div class="row justify-content-center d-flex">
                            <div class="text-center mt-3">
                                <button type="submit" class="btn btn-outline-light btn-lg">   Iscriviti Ora</button>
                            </div>

                    </form>
  </div>
</section>
</section>





    <x-footer></x-footer>

</x-layout>