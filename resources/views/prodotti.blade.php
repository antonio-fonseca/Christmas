<x-layout>
    <div class="container-fluid my-5 bg-prodotti">
        <div class="row justify-content-center">
            <div class="col-6 mt-5 text-center">
                <h2>
                    I nostri prodotti
                </h2>
            </div>
            <div  class="col-10 filtri-prodotti-custom">
                <div class="row justify-content-center gap-3">
                    <div class="col-12 col-sm-3 box-filtro">
                        <h4 id="categoria" class="text-center filtro-custom">Filtra per  categoria <i class="fa-solid fa-chevron-down fs-1x"></i></h4>
                        <div id="categoryBox" class="box-categoria d-none filtro-custom">
                            <div class="form-check">
                                <input class="form-check-input inputCustom" type="radio" name="flexRadioDefault" id="All" checked>
                                <label class="form-check-label fst-italic" for="All">
                                  Tutte le categorie
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 box-filtro">
                        <h4 id="prezzo" class="text-center filtro-custom">Filtra per  prezzo <i class="fa-solid fa-chevron-down fs-1x"></i></h4>
                        <div id="priceBox" class="box-categoria d-none">
                            <div class="text d-flex justify-content-between">
                                <span class="text-start filtro-custom">0</span>
                                <span id="maxValue" class="text-end  filtro-custom">100</span>
                            </div>
                            <input type="range" class="form-range fs-1" min="0" value="50" id="priceBar">
                        </div>
                    </div>
                    <div class="col-12 col-sm-3 box-filtro">
                        <h4 id="parola" class="text-center filtro-custom">Filtra per parola <i class="fa-solid fa-chevron-down fs-1x"></i></h4>
                        <div id="parolaBox" class="box-categoria d-none">
                            <div class="input-group mb-3">
                                <input id="worldBox" type="text" class="form-control filtro-custom fst-italic" placeholder="Nome articolo" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            <div class="col-12">
                <div id="boxCard" class="row justify-content-evenly">
                    @foreach ($prodotti as $prodotto)
                        <div class="col-12 col-sm-6 col-md-4 col-xl-3 d-flex justify-content-center align-items-center my-5">
                            <div class="card-custom rounded-top">
                                <img src="{{$prodotto['url']}}" alt="" class="img-fluid immagine-prodotti">

                                <div class="card-content d-flex flex-column">
                                    <h3 class=" mt-3 nome-prodotti fs-5">{{$prodotto['name']}}</h3>
                                    <h3 class="d-none categoria-prodotti">{{$prodotto['category']}}</h3>
                                    <h4 class=" m-0 prezzo-prodotti">{{$prodotto['price']}}</h4>
                                    <a class="btn-custom text-center" href="{{route('prodotti.dettagli',['name'=>$prodotto['name']])}}">Dettagli</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout>