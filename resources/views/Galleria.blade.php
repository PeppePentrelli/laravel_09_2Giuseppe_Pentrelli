<x-layout>
    <x-navbar></x-navbar>


    <style>
        .fade-in {
            animation: none !important;
            opacity: 1 !important;
        }
    </style>



    <header class="container-fluid header-gallery pb-5">




        <section class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="row">
                    <h2 class="text-center row-contest">Battle Pixel Contest</h2>

                </div>
                @foreach ($contestPost as $item)
                    <p class="browser-warning">If this looks wonky to you it's because this browser doesn't support the
                        CSS property 'aspect-ratio'.</p>
                    <div class="stack my-5">
                        <div class="card-galleria">
                            <div class="image-galleria">
                                <img class="img-fluid imgGalleria" src="{{ Storage::url($item->img) }}"
                                    alt="Immagine contest">
                            </div>
                            <p class="fs-4 "> Pubblicato da: <br>{{ $item->nome_epic }}</p>



                        </div>
                    </div>
                @endforeach



            </div>

        </section>





    </header>


    <x-footer></x-footer>
</x-layout>
