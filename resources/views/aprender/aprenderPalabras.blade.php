@extends('layouts.app')

@section('content')
<div class="py-5 text-center" style="background-image: url({{URL::asset('webimages/primer.png')}});background-size:cover;" >
    <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-3">Aprender Palabras</h3>
          <p class="mb-4">Estas son las palabras del dia, disponibles para tu aprendizaje, en caso quieras almacenarlas en tu perfil, dale al boton de agregar, para que las puedas revisar luego. </p>
        </div>
      </div>
    </div>
</div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="table-responsive">

            @if(count($words) )
            <table class="table table-striped table-hover" style="text-align: center">

              <thead>
                <tr class="table-secondary">
                  <th scope="col">Imagen</th>
                  <th scope="col">Ingles</th>
                  <th scope="col">Traducción</th>
                  <th scope="col">Pronunciación</th>
                  <th scope="col">Nemotecnia</th>
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
                </tr>

              </tbody>
              @endforeach
            </table>
            <?php echo $words->render() ?>

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
                <div class="form-group mb-3 text-center">
                    <button type="submit" class="btn btn-secondary">Guardar Palabras</button>
                </div>
            </form>
            @else
              <h3>Ya no quedan más palabras para estudiar :o</h3>
            @endif


          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
