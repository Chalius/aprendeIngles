
@extends('layouts.admi')

@section('content')

<div class="container">
	<div class="row justify-content-center"> 
		<div class="col-md-12">
	
			<div class="page-header">
				<h1 class="text-center">
					Bienvenido administrador! <small>Utiliza esta interfaz para modificar las palabras disponibles en la aplicacion</small>
				</h1>
				<p></p>
			</div>

			<div>
				<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded" />
				<hr>
					<table class="table table-hover" >
					      <thead class="thead-light">
					        <th>Imagen</th>
					        <th>Ingles</th>
					        <th>Traducción</th>
					        <th>Pronunciación</th>
					        <th>Mnemotecnia</th>
					        <th>Accion</th>

					      </thead>
					      @foreach($words as $word)
					        <tbody>
					          <td><img src="{{ asset('images/'. $word->img) }}" class="img-fluid" alt="Aqui va una imagen"></td>
					          <td>{{$word->palabra}}</td>
					          <td>{{$word->traduccion}}</td>
					          <td>{{$word->pronunciacion}}</td>
					          <td>{{$word->nemotecnia}}</td>
					          <td>
					          	<form action="{{ action('DictionaryController@destroy', $word->id) }}" method="POST">
		
									@csrf
							        @method('DELETE')
							        <button class="btn btn-danger float-right" type="submit">Eliminar</button>

					          	</form>
					          </td>


					        </tbody>
					      @endforeach
			</div>
		</div>
	</div>
</div>
@endsection
