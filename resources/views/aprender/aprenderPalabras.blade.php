@extends('layouts.aprender')

@section('subcontent')
  <div class="row justify-content-center">
    <h1>Aprende palabras</h1>
  </div>
  <div class="row justify-content-center">
    <table>
      <thead>
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
  <div class="row justify-content-center">
  {{$words->links()}}
  </div>

@endsection
