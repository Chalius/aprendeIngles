@extends('layouts.admi')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<h2>Nueva palabra</h2>
	</div>
	<div class="row justify-content-center mt-3">
	@if ($message = Session::get('success'))
		<div class="alert alert-success alert-block">
			<button type="button" class="close" data-dismiss="alert">X</button>
				<strong>{{ $message }}</strong>
		</div>
		<img src="images/{{Session::get('image') }}">
	@endif

	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong>There were some problems with your input.
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form action="{{ action('AchievementController@store') }}" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="mb-3">
				<label for="palabra">{{ __('Palabra') }}</label>
				<input id="palabra" type="text" class="form-control{{ $errors->has('palabra') ? ' is-invalid' : '' }}" name="name" value="{{ old('palabra') }}" autofocus required/>
				@if ($errors->has('palabra'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('palabra') }}</strong>
					</span>
				@endif
			</div>

			<div class="mb-3">
				<label for="pronunciacion">{{ __('Pronunciacion') }}</label>
				<input id="pronunciacion" type="text" class="form-control{{ $errors->has('pronunciacion') ? ' is-invalid' : '' }}" name="description" value="{{ old('pronunciacion') }}" autofocus required/>
				@if ($errors->has('pronunciacion'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('pronunciacion') }}</strong>
					</span>
				@endif
			</div>

			<div class="mb-3">
				<label for="nemotecnia">{{ __('Nemotecnia') }}</label>
				<input id="nemotecnia" type="text" class="form-control{{ $errors->has('nemotecnia') ? ' is-invalid' : '' }}" name="imagen" value="{{ old('nemotecnia') }}" autofocus required/>
				@if ($errors->has('nemotecnia'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('nemotecnia') }}</strong>
					</span>
				@endif
			</div>




			<button type="submit" class="btn btn-primary">
				{{ __('Crear') }}
			</button>
		</form>
	</div>
</div>
@endsection
