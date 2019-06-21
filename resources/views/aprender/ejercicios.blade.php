@extends('layouts.app')

@section('content')

    <div class="py-5 text-center" style="background-image: url({{URL::asset('webimages/practicar.jpg')}});background-size:cover;" >
        <div class="container">
          <div class="row">
            <div class="bg-white p-5 mx-auto col-md-8 col-10">
              <h3 class="display-3">Ejercicios</h3>


              <!-- Formulario -->
              <div class="row justify-content-center" >

                <form action="{{ action('EjerciciosController@practice') }}" method="POST" enctype="multipart/form-data">
                  @csrf

                  @isset($resolucion)
                    @if($resolucion=="Correcto")

                    <div class="alert alert-success" role="alert">
                      <h2>{{$resolucion}}</h2>
                      La respuesta fue correcta!
                    </div>


                    @else

                      <div class="alert alert-danger" role="alert">
                        <h2>{{$resolucion}}</h2>
                        Sigue practicando :)
                      </div>


                    @endif
                  @endisset



                  @isset($random)
                    <h2>Palabra: {{$random->palabra}}</h2>
                    <input id="random" type="text" class="form-control{{ $errors->has('palabra') ? ' is-invalid' : '' }}" name="randomtra" value="{{ $random->traduccion }}" style="display:none" autofocus/>
                  @else
                    <h4>Todavia no tienes palabras para estudiar.</h4>
                  @endisset



                  <input id="respuesta" type="text" class="form-control{{ $errors->has('palabra') ? ' is-invalid' : '' }}" name="respuesta" value="{{ old('respuesta') }}" autofocus/>

                  @if ($errors->has('palabra'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('Corregir') }}</strong>
                    </span>
                  @endif

                    <br>
                  <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary">
                      {{ __('Siguiente') }}
                    </button>
                  </div>
                </form>
              </div>



            </div>
          </div>
        </div>
    </div>



@endsection
