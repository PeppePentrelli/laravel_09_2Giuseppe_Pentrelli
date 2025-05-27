<x-layout>
    <x-navbar></x-navbar>



    <header class="container-fluid header-contest">
        <div class="row  d-flex justify-content-center align-items-center">




<div class="container my-5">
  <!-- STEP 1 -->
  <div class="row justify-content-center align-items-center my-4" >
    <div class="col-md-6" >
      <div class="glass-box-contest-header p-4 text-center" style="max-width: 340px; word-wrap: break-word; margin-top:300px;">
        <h4>Step 1</h4>
        <p class="fs-1">Partecipa al contest, compila il form e carica la tua immagine preferita.</p>
        <hr>
                <a class="fs-3" style=" color:black;" href="{{ route('paginaRegolamento') }}">
            Visualizza regolamento completo
        </a>
      </div>
    </div>
  </div>

  <!-- STEP 2 -->
  <div class="row justify-content-center align-items-center my-4 ">
    <div class="col-md-6 offset-md-6" >
      <div class="glass-box-contest-header p-4 text-center" style="max-width: 340px; word-wrap: break-word;">
        <h4>Step 2</h4>
        <p class="fs-3">Guarda le immagini caricate dagli altri utenti.</p>
      </div>
    </div>
  </div>

  <!-- STEP 3 -->
  <div class="row justify-content-center align-items-center my-4">
    <div class="col-md-6">
      <div class="glass-box-contest-header p-4 text-center" style="max-width: 340px; word-wrap: break-word;">
        <h4>Step 3</h4>
        <p class="fs-3">Vota la tua immagine preferita e fai vincere il migliore!</p>
      </div>
    </div>
  </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errore)
                <li class="fs-3">{{ $errore }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <div class="col-12 d-flex justify-content-center align-items-center glass-box-contest-header px-5 mb-5">
               <form id="contestForm" class="contest-form" action="{{ route('contest.store') }}#contestForm" method="POST" enctype="multipart/form-data">
    @csrf
                @csrf
            <div>
                <label class="fs-3" for="nomeGiocatore">Nome Giocatore</label>
                <input class=" form-control" type="text" id="nomeGiocatore" name="nome_giocatore" value="{{old('nome_giocatore')}}">
            </div>

                        <div>
                <label class="fs-3" for="cognome">Cognome</label>
                <input class=" form-control " type="text" id="cognome" name="cognome">
            </div>

                        <div>
                <label class="fs-3" for="nome_epic">Nome Epic</label>
                <input class=" form-control " type="text" id="nome_epic" name="nome_epic">
            </div>

                        <div>
                <label class="fs-3" for="email">Email</label>
                <input class=" form-control " type="text" id="email" name="email">
            </div>


            <div>
                                     <select  name="piattaforma" class="form-control select-custom-contest  fs-3" required>
                            <option selected disabled>Scegli la piattaforma</option>
                            <option value="ps4">PlayStation 4</option>
                            <option value="ps5">PlayStation 5</option>
                            <option value="xbox">Xbox</option>
                            <option value="nintendo">Nintendo Switch</option>
                            <option value="mobile">Mobile</option>
                            <option value="pc">PC</option>
                        </select>
            </div>

                        <div>
                <label for="img"></label>
                <input class=" form-control " type="file" id="img" name="img">
            </div>

            <div class="row justify-content-center d-flex">
                            <div class="mt-4 justify-content-center d-flex">
                <button class=" btn-custom-contest ">Invia</button>
            </div>
            </div>

               </form>
            </div>








    </header>


    <x-footer></x-footer>
</x-layout>
