@extends('layouts.app')

@section('content')
  <div class="row justify-content-center">

  </div>







  <div class="container">
    <h1>Lo aprendido</h1>
    <div class="row justify-content-center">

      @if(count($diccionario) )
        <table class="table table-hover">
          <thead class="thead-light">
            <th>Imagen</th>
            <th>Ingles</th>
            <th>Traducción</th>
            <th>Pronunciación</th>
            <th>Mnemotecnia</th>
          </thead>
          @foreach($diccionario as $word)
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
      @else
        <h3>Todavía no tienes palabras estudiadas.</h3>
      @endif
    </div>
  </div>

















@endsection
