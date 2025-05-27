<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container-fluid">
    {{-- <a class="navbar-brand" href="#">
      <img style="" class="img-fluid img-logo" src="{{ asset('Media/Lama.png') }}" alt="Logo">
    </a> --}}
    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() === 'Home') active-custom @endif"
              href="{{ route('Home') }}">Home</a>
      </li>
        <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() === 'paginaArmi') active-custom @endif" href="{{ route('paginaArmi') }}">Armi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() === 'paginaSkin') active-custom @endif" href="{{ route('paginaSkin') }}">Skin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() === 'paginaBundle') active-custom @endif" href="{{ route('paginaBundle') }}">Bundle</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() === 'paginaCommunity') active-custom @endif" href="{{ route('paginaCommunity') }}">Community</a>
        </li>
        <li class="nav-item">
<a class="nav-link @if (Route::currentRouteName() === 'paginaContest') active-custom @endif" href="{{ route('paginaContest') }}">Contest</a>
</li>
        <li class="nav-item">
<a class="nav-link @if (Route::currentRouteName() === 'paginaGalleria') active-custom @endif" href="{{ route('paginaGalleria') }}">Galleria</a>
</li>
                <li class="nav-item">
          <a class="nav-link @if (Route::currentRouteName() === 'PaginaChiSiamo') active-custom @endif" href="{{ route('PaginaChiSiamo') }}">Chi Siamo</a>
        </li>
        <div id="google_translate_element"></div>
        <li class="nav-item align-items-center d-flex">
          <select id="customLangSelect" class="form-select custom-language-select mx-auto">
            <option value="">🌍 Seleziona lingua</option>
            <option value="it">🇮🇹 Italiano</option>
            <option value="en">🇬🇧 Inglese</option>
            <option value="fr">🇫🇷 Francese</option>
            <option value="de">🇩🇪 Tedesco</option>
            <option value="es">🇪🇸 Spagnolo</option>
            <option value="pt">🇵🇹 Portoghese</option>
          </select>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
