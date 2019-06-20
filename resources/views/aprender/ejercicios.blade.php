@extends('layouts.app')

@section('content')
  <br>
  <br>
  <div class="row justify-content-center">
    <h1>Ejercicios</h1>
  </div>
  <div class="row justify-content-center">
    <h3>En esta área practica tus palabras</h3>
  </div>

  <br>

  <div class="row justify-content-center">
    <img class="card-img-right flex-auto d-none d-lg-block" src="{{URL::asset('webimages/trabajando.png')}}"  height="300" width="300" alt="logro1">
  </div>

  <div class="row justify-content-center">
    <h4>Estamos trabajando en esta página. Disculpa las molestias.</h4>
  </div>
  <br>


@endsection
