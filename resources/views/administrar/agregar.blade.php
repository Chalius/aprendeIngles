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

		<form action="{{ action('DictionaryController@store') }}" method="POST" enctype="multipart/form-data">
		@csrf
			<div class="mb-3">
				<label for="palabra">{{ __('Title') }}</label>
				<input id="palabra" type="text" class="form-control{{ $errors->has('palabra') ? ' is-invalid' : '' }}" name="palabra" value="{{ old('palabra') }}" autofocus required/>	
				@if ($errors->has('palabra'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('palabra') }}</strong>
					</span>	
				@endif
			</div>
					
			<div class="custom-file mb-3">
				<input type="file" class="custom-file-input{{ $errors->has('img') ? ' is-invalid' : '' }}" id="img" name="img"  required>
				<label class="custom-file-label" for="img">{{ __('Image') }}</label>
				<div class="invalid-feedback">Example invalid custom file feedback</div>
			</div>
			<button type="submit" class="btn btn-primary">
				{{ __('Create') }}
			</button>
		</form>
	</div>
</div>
@endsection

    'palabra',
        'pronunciacion',
        'nemotecnia',
        'traduccion',
        'img',
