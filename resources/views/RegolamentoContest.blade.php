<x-layout>
    <x-navbar></x-navbar>



<div class="container my-5">
    <h1 class="text-center mb-4 fs-1">📜 Regolamento Ufficiale del Contest Fotografico</h1>

    <div class="card shadow p-4">
        <h4 class="mb-3 fs-1">Art. 1 – Organizzazione del Contest</h4>
        <p class="fs-3">Il presente contest è organizzato da <strong>Fortnite: il blog</strong>. Il concorso ha finalità ricreativa e promozionale, e si svolge esclusivamente online.</p>

        <h4 class="mt-4 fs-2">Art. 2 – Durata del Contest</h4>
        <p class="fs-3">Il contest si svolgerà dal <strong>15/05/2025</strong> al <strong>15/06/2025</strong> alle ore 23:59.</p>

        <h4 class="mt-4 fs-2">Art. 3 – Modalità di Partecipazione</h4>
        <ul class="fs-3">
            <li>Partecipazione gratuita aperta a tutti dai 16 anni in su.</li>
            <li>Ogni utente può inviare <strong>una sola foto originale</strong>.</li>
            <li>La foto deve rispettare il tema proposto ed essere inviata tramite il modulo nella sezione Community.</li>
            <li>Foto offensive, inappropriate o coperte da copyright saranno escluse.</li>
        </ul>

        <h4 class="mt-4 fs-2">Art. 4 – Requisiti delle Foto</h4>
        <ul class="fs-3">
            <li>Formato accettato: JPG o PNG.</li>
            <li>Dimensione massima: 5MB.</li>
            <li>Descrizione facoltativa (max 300 caratteri).</li>
            <li>L’autore garantisce di possedere tutti i diritti sull’immagine.</li>
        </ul>

        <h4 class="mt-4 fs-2">Art. 5 – Sistema di Votazione</h4>
        <ul class="fs-3">
            <li>Ogni utente può votare cliccando "❤️ Mi piace".</li>
            <li><strong>Un solo voto per foto per utente</strong>.</li>
            <li>Le votazioni sono pubbliche e aggiornate in tempo reale.</li>
        </ul>

        <h4 class="mt-4 fs-2">Art. 6 – Criteri di Selezione del Vincitore</h4>
        <p class="fs-3">La foto con più voti alla scadenza sarà dichiarata vincitrice. In caso di parità, sarà effettuata una selezione da parte della giuria dello staff.</p>

        <h4 class="mt-4 fs-2">Art. 7 – Premio</h4>
        <p class="fs-3">Il vincitore riceverà <strong>un badge esculsivo del blog</strong>.</p>

        <h4 class="mt-4">Art. 8 – Esclusione e Sanzioni</h4>
        <p class="fs-3">L’Organizzatore si riserva il diritto di escludere utenti che usino bot, script o comportamento fraudolento. Saranno rimosse foto non idonee o offensive.</p>

        <h4 class="mt-4 fs-2">Art. 9 – Privacy e Diritti d'Autore</h4>
        <p class="fs-3">I dati saranno trattati secondo il GDPR. L’autore mantiene la proprietà della foto ma ne concede l’uso gratuito per fini promozionali con attribuzione.</p>

        <h4 class="mt-4 fs-2">Art. 10 – Accettazione del Regolamento</h4>
        <p class="fs-3">La partecipazione implica l’accettazione completa del presente regolamento. Per ogni controversia, decide l’Organizzatore in via definitiva.</p>

        <hr class="my-4">

        <p class="text-muted fs-3">Per info o supporto:</p>

                            <form class="" style="" method="POST"
                        action="{{ route('send_email') }}">
                        @csrf
                        <div class="mb-3 mt-5">
                            <input type="text" name="name" class="form-control  fs-4"
                                placeholder="Nome giocatore" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control  fs-4"
                                placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea name="description" class="form-control  fs-4" rows="4" placeholder="Scrivi un messaggio..."
                                required></textarea>
                        </div>
                        <div class="row justify-content-center d-flex">
                            <div class="text-center mt-3">
                                <button type="submit" class="btn-form">Invio</button>
                            </div>

                        </div>
                    </form>
</div>
</div>



    <x-footer></x-footer>
</x-layout>