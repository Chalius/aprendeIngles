
@extends('layouts.admi')

@section('content')

<div class="container">
	<div class="row justify-content-center"> 



					<div class="tab-pane" id="tab3">
						<nav class="navbar navbar-light bg-light justify-content-center">

						  <form class="form-inline" action="{{ route('search')}}" method="GET" >

						    <input class="form-control mr-sm-2" type="text" placeholder="Palabra a buscar" id="query" name="query" value="{{ request()->input('query') }}">

						    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
						  </form>
						</nav>
					</div>


					<div class="search-container container">
						<h1>Resultados de busqueda</h1>
						<p>{{ $words->count() }} resultado(s) para '{{ request()->input('query') }}'</p>

			
						<table class="table table-hover" >
					      <thead class="thead-light">
					        <th>Imagen</th>
					        <th>Ingles</th>
					        <th>Traducción</th>
					        <th>Pronunciación</th>
					        <th>Mnemotecnia</th>
					      </thead>
					      @foreach($words as $word)
					        <tbody>
					          <td><img src="{{ asset('images/'. $word->img) }}" class="img-fluid" alt="Aqui va una imagen"></td>
					          <td>{{$word->palabra}}</td>
					          <td>{{$word->traduccion}}</td>
					          <td>{{$word->pronunciacion}}</td>
					          <td>{{$word->nemotecnia}}</td>

					        </tbody>
					      @endforeach

					</div>

	</div>
</div>
			
@endsection