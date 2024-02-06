<x-layout>

    <div class="container-fluid my-5">
        <div class="row bg-home">
            <div class="col-12 d-flex align-items-start justify-content-end mt-5">
                <a href="{{route('contattaci')}}"><button class="btn-home me-5 mb-5 btn border-danger border-3 shadow">
                    Scrivimi la tua letterina
                </button></a>
            </div>
            <div class="col-12">
                <h1 class="navbar-brand2 text-center">SantaClaus.com</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid mb-5">
        <div class="row justify-content-center">
            <div class="col-6 mb-5 text-center border-bottom border-1">
                <h2>
                    I migliori prodotti
                </h2>   
            </div>
            <div class="col-12">
                <div class="row justify-content-evenly">
                    @foreach ($prodotti as $prodotto)
                        <div class="col-12 col-sm-6 col-xl-3 d-flex justify-content-center align-items-center my-3">
                            <div class="card-custom rounded-top">
                                <img src="{{$prodotto['url']}}" alt="" class="img-fluid">
                                <div class="card-content d-flex flex-column">
                                    <h3>{{$prodotto['name']}}</h3>
                                    <h4>{{$prodotto['price']}}</h4>
                                    <a class="btn-custom text-center" href="{{route('home.dettagli',['name'=>$prodotto['name']])}}">Dettagli</a>
                                </div>
                                <div class="regalo"></div>     
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 border-top border-1">
        <div class="row justify-content-center align-items-center">
            <div class="col-10 col-md-4">
                <img src="/media/bn_addio.png" alt="" class="img-fluid">
            </div>
            <div class="col-12 col-md-8 ps-md-5">
                <h1 class="text-center mt-5 font-titoli">Santa Claus amico del ambiente!</h1>
                <p class="font-testi prg-home mt-5 px-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem accusamus quia, alias cumque sunt nesciunt velit sapiente natus, nisi quibusdam doloremque eius amet reiciendis provident laudantium consequatur temporibus! Illo! Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem accusamus quia, alias cumque sunt nesciunt velit sapiente natus, nisi quibusdam doloremque eius amet reiciendis provident laudantium consequatur temporibus! Illo!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem accusamus quia, alias cumque sunt nesciunt velit sapiente natus, nisi quibusdam doloremque eius amet reiciendis provident laudantium consequatur temporibus! Illo!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur autem accusamus quia, alias cumque sunt nesciunt velit sapiente natus, nisi quibusdam doloremque eius amet reiciendis provident laudantium consequatur temporibus! Illo!</p>
            </div>
        </div>
    </div>


</x-layout>
