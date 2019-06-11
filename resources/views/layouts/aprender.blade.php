@extends('layouts.app')

@section('content')


  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              
              <ul class="navbar-nav mr-auto">
                        
                 <!-- OPCIONES DE NAVEGACION  -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/aprender/aprendePalabras')}}">Aprende palabras </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/aprender/ejercicios') }}">Ejercicios </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{url('/aprender/examenes')}}">Exámenes </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{url('/aprender/loAprendido')}}">Lo aprendido </a>
                        </li>
                    </ul>      


          </div>
      </div>
  </nav>

  @yield('subcontent')

@endsection
