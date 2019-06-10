@extends('layouts.app_log')

@section('content')


  <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
                <a href="{{url('/aprender/aprendePalabras')}}">Aprende palabras</a>
              </ul>
              <ul class="navbar-nav mr-auto">
                <a href="{{ url('/aprender/ejercicios') }}">Ejercicios</a> <!--código blade para acceder a otras vistas -->
              </ul>
              <ul class="navbar-nav mr-auto">
                <a href="{{url('/aprender/examenes')}}">Exámenes</a>
              </ul>
              <ul class="navbar-nav mr-auto">
                <a href="{{url('/aprender/loAprendido')}}">Lo aprendido</a>
              </ul>
          </div>
      </div>
  </nav>

  @yield('subcontent')

@endsection
