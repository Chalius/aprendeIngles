
@extends('layouts.app')

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

			<div class="tabbable" id="tabs-982794">
				<ul class="nav nav-tabs justify-content-center">
					<li class="nav-item">
						<a class="nav-link" href="#tab1" data-toggle="tab">Listar palabras</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab2" data-toggle="tab">Agregar Palabras</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#tab3" data-toggle="tab">Buscar Palabra</a>
					</li>

				</ul>
				<div class="tab-content">


					<div class="tab-pane" id="tab1">

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
					          <td>{{$word->img}}</td>
					          <td>{{$word->palabra}}</td>
					          <td>{{$word->traduccion}}</td>
					          <td></td>
					          <td>{{$word->nemotecnia}}</td>

					        </tbody>
					      @endforeach
    				
			
						<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg" class="rounded" />

									

					</div>

					<div class="tab-pane" id="tab2">	


						<div class="row">
							<div class="col-md-3">
							</div>
							<div class="col-md-6">

								<form role="form">
									<div class="form-group">
										 
										<label for="exampleInputEmail1">
											Email address
										</label>
										<input type="email" class="form-control" id="exampleInputEmail1" />
									</div>
									<div class="form-group">
										 
										<label for="exampleInputPassword1">
											Password
										</label>
										<input type="password" class="form-control" id="exampleInputPassword1" />
									</div>
									<div class="form-group">
										 
										<label for="exampleInputFile">
											File input
										</label>
										<input type="file" class="form-control-file" id="exampleInputFile" />
										<p class="help-block">
											Example block-level help text here.
										</p>
									</div>
									<div class="checkbox">
										 
										<label>
											<input type="checkbox" /> Check me out
										</label>
									</div> 
									<button type="submit" class="btn btn-primary">
										Submit
									</button>
								</div>
							</form>
						</div>
	


					</div>

					<div class="tab-pane" id="tab3">
						<nav class="navbar navbar-light bg-light justify-content-center">
						  <form class="form-inline">
						    <input class="form-control mr-sm-2" type="text" placeholder="Palabra a buscar">
						    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
						  </form>
						</nav>
					</div>




				</div>
			</div>
			






		</div>


	</div>
</div>

@endsection
