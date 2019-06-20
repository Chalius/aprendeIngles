
@extends('layouts.admi')

@section('content')
<div class="py-5 text-center" style="background-image: url({{URL::asset('webimages/primer.png')}});background-size:cover;" >


    <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3">Lista de resultados</h3>
          <p class="mb-4">A continuación se mostraran todos los resultados de las palabras almacenadas en la base de datos. En caso se desee borrar un elemento, acceder a los botones implementados en la lista. </p>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">
            <table class="table table-striped table-hover" style="text-align: center">

              <thead>
                <tr class="table-secondary">
                  <th scope="col">Imagen</th>
                  <th scope="col">Ingles</th>
                  <th scope="col">Traducción</th>
                  <th scope="col">Pronunciación</th>
                  <th scope="col">Nemotecnia</th>
                  <th scope="col">Accion</th>
                </tr>
              </thead>

              @foreach($words as $word)
              <tbody>
                
             
                <tr>
                    <td class="w-25">
                        <img src="{{ asset('images/'. $word->img) }}" class="img-fluid img-thumbnail" alt="Aqui va una imagen" style="max-width: 400px;">   
                    </td>

                    <td class="align-middle">{{$word->palabra}}</td>
                    <td class="align-middle">{{$word->traduccion}}</td>
                    <td class="align-middle">{{$word->pronunciacion}}</td>
                    <td class="align-middle">{{$word->nemotecnia}}</td>
                    <td class="align-middle">
                        <a href="/administrar/{{$word->id}}/edit" class="btn btn-outline-primary ">Editar</a>
                        <p></p>
                        <hr>
                        <form action="{{ action('DictionaryController@destroy', $word->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-secondary" type="submit">Eliminar</button>
                        </form>

                    </td>
                </tr>

              </tbody>
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
