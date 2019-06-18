@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 class="card-header">Edicion de cuenta</h1>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                <br/> 
                @endif

        <div class="card-body">
        <form method="post" action="{{ action('UserController@update',  \Auth::user()->id)}}">
            @method('PATCH') 
            @csrf
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="name" value={{ $thisUser->name }} />
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">Correo Electronico:</label>
                <div class="col-md-6">
                    <input type="text" class="form-control" name="email" value={{ $thisUser->email }} />
                </div>
            </div>


            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">Nueva Contraseña:</label>
                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar Contraseña:</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary ">Actualizar datos</button>
            </div>

        </form>
        
        </div>
        
    </div>
    <p></p>
    <form action="{{ action('UserController@destroy', \Auth::user()->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger float-right" type="submit">Eliminar mi Cuenta</button>
      </form>
    </div>
    </div>
</div>
@endsection
