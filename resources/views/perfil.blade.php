@extends('layouts.app')

@section('content')

  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-10">
            <h1>
              {{ Auth::user()->name}}
              {{ Auth::user()->email }}
            </h1>
            <hr style="">

            <div class="row marketing">
              <div class="col-lg-6">
                <h4>LOGROS</h4>

                {{-- Items de logros --}}
                <div class="row mb-2">
                  <div class="col-md-10">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                      <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                          Primer ejercicio
                        </h3>
                        <p class="card-text mb-auto">Termina tu primer ejercicio.</p>
                        <p class="card-text mb-auto">INCOMPLETO</p>
                      </div>
                      <img class="card-img-right flex-auto d-none d-lg-block" src="{{URL::asset('webimages/logros/logro1.png')}}"  height="128" width="128" alt="logro1">
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-10">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                      <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                          Evaluate
                        </h3>
                        <p class="card-text mb-auto">Aprueba tu primer examen.</p>
                        <p class="card-text mb-auto">INCOMPLETO</p>
                      </div>
                      <img class="card-img-right flex-auto d-none d-lg-block" src="{{URL::asset('webimages/logros/logro2.png')}}"  height="128" width="128" alt="logro1">
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-10">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                      <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                          Perfección
                        </h3>
                        <p class="card-text mb-auto">Aprueba un examen sin fallar.</p>
                        <p class="card-text mb-auto">INCOMPLETO</p>
                      </div>
                      <img class="card-img-right flex-auto d-none d-lg-block" src="{{URL::asset('webimages/logros/logro3.png')}}"  height="128" width="128" alt="logro1">
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  <div class="col-md-10">
                    <div class="card flex-md-row mb-4 box-shadow h-md-250">
                      <div class="card-body d-flex flex-column align-items-start">
                        <h3 class="mb-0">
                          Persistente
                        </h3>
                        <p class="card-text mb-auto">Completa tus primeros 20 ejercicios.</p>
                        <p class="card-text mb-auto">INCOMPLETO</p>
                      </div>
                      <img class="card-img-right flex-auto d-none d-lg-block" src="{{URL::asset('webimages/logros/logro4.png')}}"  height="128" width="128" alt="logro1">
                    </div>
                  </div>
                </div>








              </div>
              <div class="col-lg-6">
                <h4>DESEMPEÑO</h4>
                <p>Aquí veremos el desempeño obtenido.</p>
              </div>
            </div>











          </div>
      </div>
  </div>




@endsection
