
@extends('layouts.admi')

@section('content')
	<div class="py-5">
		<div class="container">
			<div class="row justify-content-center mt-3">

<<<<<<< HEAD
				<div class="tab-pane" id="tab3">
					<nav class="navbar navbar-light bg-light justify-content-center">

					  <form class="form-inline" action=" {{ route('search')}}" method="GET" >

					    <input class="form-control mr-sm-2" type="text" placeholder="Palabra a buscar" id="query" name="query">

					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>

					  </form>
					</nav>
				</div>

			</div>
		</div>
	</div>
=======
<div class="py-5 text-center" style="background-image: url({{URL::asset('webimages/primer.png')}});background-size:cover;">

  <div class="container">
    <div class="row">
      <div class="bg-white p-5 mx-auto col-md-8 col-10">
        <h3 class="display-4">Busqueda de Palabras</h3>
        <p class="mb-4">Para buscar palabras ingrese el registro en formato de ingles, por ejemplo si desea verificar la existencia de la palabra "house" tendra que ingresarla en ingles.</p>
        <div class="text-center">

          <form class="form-inline justify-content-center" action=" {{ route('search')}}" method="GET">
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
>>>>>>> origin/master
@endsection
