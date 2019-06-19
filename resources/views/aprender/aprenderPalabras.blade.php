@extends('layouts.app')

@section('content')
<div class="py-5">
  <div class="container">
    <div class="row justify-content-center">
      <h1>Aprende palabras</h1>
    </div>
    <div class="row justify-content-center">

      @if(count($words) )
        <table class="table table-hover">
          <thead class="thead-light">
            <th>Imagen</th>
            <th>Ingles</th>
            <th>Traducción</th>
            <th>Pronunciación</th>
            <th>Mnemotecnia</th>
          </thead>

            @foreach($words as $word)
              <tbody>
                <td>{{$word->img}}</td>
                <td>{{$word->palabra}}</td>
                <td>{{$word->traduccion}}</td>
                <td></td>
                <td>{{$word->nemotecnia}}</td>
                {{--
                  <td>{{$word->pronunciacion}}</td> genera problemas en la vista
                --}}

              </tbody>
            @endforeach
        </table>
    </div>
  </div>

  <div class="row justify-content-center">
  
  {{-- formulario para el boton "aprendido!""--}}

  <?php
  #$array = [];
  $array[]=array();
  foreach ($words as $word) {
    array_push($array,$word->id);
  };

   ?>

  <form action="{{ action('AprendidasController@store', ['ids' => $array]) }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row justify-content-center" >
      <h6>Repasa estas palabras usando las nemotecnias <br> y cuando termines usa este boton.</h6>
    </div>
    <div class="row justify-content-center">
        <button type="submit" class="btn btn-primary">Aprendido!</button>
    </div>
  </form>


  @else
    <h3>Ya no quedan más palabras para estudiar :o</h3>
  @endif
  </div>

</div>
</div>
@endsection
