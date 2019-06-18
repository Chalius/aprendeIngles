
@extends('layouts.admi')

@section('content')

<div class="container">
	<div class="row justify-content-center"> 



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
			
@endsection