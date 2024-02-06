<x-layout>
    {{-- <h1 class="my-5 pt-5 text-center">{{$prodotto['name']}}</h1> --}}

    <div class="container pt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="{{$prodotto['url']}}" alt="immagine card" class="img-fluid px-5 my-5">
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
                <div class="font-testi border border-1 p-4 d-flex flex-column rounded">
                    <h2>{{$prodotto['name']}}</h2>
                    <p>{{$prodotto['desc']}}</p>
                    <p>Prezzo: <span class="h3 text-danger">{{$prodotto['price']}}</span></p>
                    <div class="d-flex justify-content-center">
                        <a class="btn-dettaglioProdotti text-center" href="{{route('dettagli.email', ['name' => $prodotto['name']])}}">
                            <i class="fa-solid fa-gift"></i>
                            Aggiungi alla letterina
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>