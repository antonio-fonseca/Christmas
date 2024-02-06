<x-layout>
<div class="container-fluid bg-chiSiamo ">
    <div class="container-fluid ">
        <div class="row mt-5 pt-5 justify-content-center">
            <div class="col-6 mt-2 text-center border-bottom border-1">
                <h2>
                    Il nostro team
                </h2>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-12 col-md-6 d-flex justify-content-center my-5">

                <div id="circle" class="d-flex justify-content-center align-items-center mt-5">

                      <div id="opener" class="d-flex justify-content-center align-items-center shadow">
                          <i class="fa-solid fa-plus fa-2x text-white opacity-75"></i>
                      </div>



                </div>
            </div>

            <div class="col-12 col-md-6 d-flex justify-content-center mt-5 align-items-center">

              <div id="teacherCard" class=" d-flex flex-column justify-content-between align-items-center d-none font-testi mb-5">
                <img id="imgCard" class="rounded-circle" alt="...">

                <div class="card-body text-center mt-3">
                  <h5 id="cardTitle" class="card-title"></h5>
                  <p id="cardDescription" class="card-text p-2"></p>
                </div>


            </div>


        </div>
      </div>
    </div>
            {{-- <div class="col-12">
                <div id="wrapper" class="row">
                    <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center mt-5 mb-3">
                        <div class="circle">
                            <div class="internalCircle">
                                <i class="fa-solid fa-plus fa-2x bg-transparent"></i>
                            </div>
                            <div class="photoCircle img-fluid">

                            </div>
                            <div class="photoCircle img-fluid">

                            </div>
                            <div class="photoCircle img-fluid">

                            </div>
                            <div class="photoCircle img-fluid">

                            </div>
                        </div>
                    </div>


                    <div class="col-12 col-lg-6 d-flex justify-content-center mt-5 ">
                        <div id="card" class="card-custom-circle">
                            <img id="imgCard" src="" alt="" class="w-100">
                            <div class="card-custom-body text-center">
                                <h2 class="mt-3" id="nomeCard">Babbo Natale</h2>
                                <p class="font-testi fs-5" id="descrizione">è il boss delle torte</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        @vite(['resources/js/chi-siamo.js'])

</x-layout>