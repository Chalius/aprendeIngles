
@extends('layouts.app')

@section('content')

<div class="py-5 text-center" style="background-image: url('https://www.lemaydigital.com/wp-content/uploads/2018/02/great-feature-image-800x400.jpg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="bg-white p-5 mx-auto col-md-8 col-10">
          <h3 class="display-4">Busqueda de Palabras</h3>
          <p class="mb-4">Para buscar palabras ingrese el registro en formato de ingles, por ejemplo si desea verificar la existencia de la palabra "house" tendra que ingresarla en ingles.</p>
          <div class="text-center">

              <form class="form-inline justify-content-center" action=" {{ route('usuario.search')}}" method="GET">
                <div class="input-group">
                  <input type="text" class="form-control" id="query" name="query" placeholder="Busqueda">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button></div>
                </div>
              </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3" >
    <div class="container">
      <div class="row">
        <div class="ml-auto col-lg-12 text-center text-lg-left">
          <h1 class="">Resultados de la busqueda</h1>
          <p class="mb-0">{{ $words->count() }} resultado(s) para '{{ request()->input('query') }}'</p>
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
                  <th scope="col">Traduccion</th>
                  <th scope="col">Pronunciacion</th>
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

          </div>
        </div>
      </div>
    </div>
  </div>

			
@endsection