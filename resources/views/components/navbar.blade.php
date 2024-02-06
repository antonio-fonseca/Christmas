<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top navbar-custom">
    <div class="container-fluid">
      <a href="{{route('home')}}"> <img src="/media/logo.png" class="pe-2 logo"></a>
      <h1 class="m-0 p-0 navbar-brand">
        Santa Claus
      </h1>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <div class="d-flex justify-content-center">
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item p-0 mx-3">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item p-0 mx-3">
              <a class="nav-link" href="{{route('prodotti')}}">Prodotti</a>
            </li>
            <li class="nav-item p-0 mx-3">
              <a class="nav-link" href="{{route('chi-siamo')}}">Chi siamo</a>
            </li>
            <li class="nav-item p-0 mx-3">
              <a class="nav-link" href="{{route('contattaci')}}">Contattaci</a>
            </li>
          </ul>
        </div>
        
      </div>
    </div>
  </nav>
