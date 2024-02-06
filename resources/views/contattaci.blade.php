<x-layout>

        <div class="container-fluid mt-5">
        <div class="row mt-5">

            <div class="col-12 d-flex justify-content-center align-items-center vh-100 mt-5 pt-5">
                <div class="box-letter click-box-letter shadow">
                    <div class="body-letter border border-tertiary rounded font-titoli">
                    <form method="POST" action="{{route('contattaci.letterina')}}">
                    @csrf
                      <div class="top-content d-flex align-items-center ">

                        <div class="topright-part">
                            <p>Caro Babbo Natale, </p>
                            <div class="name-container">
                              <label for="nome" class="label-name">Il mio nome: </label>
                              <input type="text" id="nome" name="name" class="input-letter bg-transparent">
                            </div>
                            <div class="email-container">
                              <label for="email" class="label-email">La mia email: </label>
                              <input type="email" id="email" name="email" class="input-letter bg-transparent">
                            </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <label for="text" class="label-text bg-transparent mb-2">Per natale vorrei: </label>
                        <textarea name="body" id="text" cols="30" rows="10" class="textarea-letter bg-transparent">@if(session('name'))1x {{session('name')}},@endif </textarea>
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-danger">Invia</button>
                          </div>
                      </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


     @vite(['resources/js/letterina.js'])
</x-layout>