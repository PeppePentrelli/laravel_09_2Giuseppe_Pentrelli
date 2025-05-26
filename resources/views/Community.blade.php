<x-layout>

    <x-navbar></x-navbar>

    <!-- Sezione Benvenuto-->
    <section class="text-yellow  text-center section-presentazione-community container-fluid">
        <div class="row mx-auto">
            <h1 class="text-yellow testo-con-bg">Benvenuto nella Community!</h1>
            <p class="mt-4 text-lg fs-4 testo-con-bg">
                Unisciti a un gruppo di persone appassionate, scambia idee, cresci con noi.
            </p>
        </div>

        <!-- Form Iscrizione -->
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form class="mx-auto" method="POST" action="{{ route('Community.send') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3 mt-3">
                        <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="text" name="cognome" class="form-control" placeholder="Cognome" required>
                    </div>
                    <div class="mb-3 mt-3">
                        <input type="text" name="nomeEpic" class="form-control" placeholder="Nome Epic" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                     <label for="imgProfile" class="form-label fs-5">Inserisci un immagine di profilo</label>
                    <div class="mb-3">
                        <input type="file" name="imgProfile" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="imgPost" class="form-label fs-5">Inserisci un immagine nel post</label>
                        <input type="file" name="imgPost" class="form-control"  required>
                    </div>
                    <div class="mb-3">
                        <label for="piattaforma" class="form-label fs-5">Scegli la tua piattaforma</label>
                        <select name="piattaforma" class="form-select" required>
                            <option selected disabled>Scegli la piattaforma</option>
                            <option value="ps4">PlayStation 4</option>
                            <option value="ps5">PlayStation 5</option>
                            <option value="xbox">Xbox</option>
                            <option value="nintendo">Nintendo Switch</option>
                            <option value="mobile">Mobile</option>
                            <option value="pc">PC</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <textarea name="description" class="form-control" rows="4" placeholder="Scrivi un messaggio..." required></textarea>
                    </div>
                    <div class="text-center mt-3">
                        <button type="submit" class="btn btn-like">Invio</button>
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

    
    <!-- Sezione Commenti e Post -->
    <section class="container-fluid  my-5 section-comment">
        <div class="row justify-content-center">
            @foreach ($userPost as $post)
                <div class="comment-card col-md-3 col-sm-10 mx-2 mt-5" data-aos="flip-left">
                    <div class="d-flex align-items-center mb-3">
                        <div class="avatar-circle me-2">
                            {{ strtoupper(substr($post->nome, 0, 1)) }}
                        </div>
                        <h5 class="m-0 fs-1">{{ $post->nome }} {{ $post->cognome }}</h5>
                    </div>
                    <p class="fw-bold">{{ $post->nomeEpic }}</p>
                    <p class="fs-3"><strong>Piattaforma:</strong> {{ strtoupper($post->piattaforma) }}</p>
                    <p class="fs-4"><strong>Email:</strong> {{ $post->email }}</p>
                    <p class="fs-5" ><strong>Messaggio:</strong><br>{{ $post->description }}</p>
                    <small>Inviato il {{ $post->created_at->format('d/m/Y H:i') }}</small>

                    <!-- Sezione Mi Piace -->
                    <div class="my-3">
                        <span class="fs-3">{{ $post->likes }} Mi Piace</span>
                        <form action="{{ route('Community.like', ['id' => $post->id]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-like">Mi Piace</button>
                        </form>
                    </div>

                    <!-- Sezione Commenti -->
                    <hr class="footer-line my-4">
                    <h6 class="mt-4 fs-2">Commenti:</h6>
                    @foreach ($post->comments as $comment)
                        <div class="comment mt-3 ">
                            <div class="d-flex align-items-center fs-3">
                                <p><strong class="fs-3">{{ $comment->autore }}</strong>  ha scritto: </p>
                            </div>
                            <p class="fs-3">{{ $comment->contenuto }}</p>
                            <small>Commentato il {{ $comment->created_at->format('d/m/Y H:i') }}</small>
                        </div>
                        <hr class="footer-line my-4">
                    @endforeach

                    <!-- Form per Aggiungere un Commento -->
                    <form method="POST" action="{{ route('Community.comment', ['id' => $post->id]) }}">
                        @csrf
                        <div class="mb-2">
                            <input type="text" name="autore" class="form-control" placeholder="Il tuo nome" required>
                        </div>
                        <div class="mb-2">
                            <textarea name="contenuto" class="form-control" placeholder="Scrivi un commento..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-like">Aggiungi commento</button>
                    </form>
                </div>
            @endforeach
        </div>
    </section>

  
    <x-footer></x-footer>

</x-layout>
