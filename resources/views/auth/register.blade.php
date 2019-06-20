@extends('layouts.app')

@section('content')
<div class="py-5 text-center" style="background-image: url({{URL::asset('webimages/login.png')}}); background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="mx-auto col-md-6 col-10 bg-white p-5" >
        <h1 class="mb-4">Registro</h1>

        <form class="text-left" method="POST" action="{{ route('register') }}">
          @csrf

          <div class="form-group"> <label for="name">Nombre</label> 
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror 
          </div>

          <div class="form-group"> <label for="email">Email</label> 
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="ejemplo@email.com" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <!-- EN CASO QUE SE QUIERA AGREGAR EL TELEFONO 
          <div class="form-group"> <label for="telefono">Telefono</label> 
            <input type="text" class="form-control"  placeholder=" ">
            <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}">
            @error('telefono')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          -->

          <div class="form-row">
            <div class="form-group col-md-6"> <label for="password">Contraseña</label> 
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="••••" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-6"> <label for="password-confirm">Confirmar Contraseña</label>
                <input id="password-confirm" type="password" class="form-control" placeholder="••••" name="password_confirmation" required autocomplete="new-password">
            </div>
          </div>

          <div class="form-group">
            <div class="form-check"> <input class="form-check-input" type="checkbox" id="form21" value="on"> <label class="form-check-label" for="form21"> Estoy de acuerdo con los <a href="#">Terminos y condiciones</a> del servicio </label> 
            </div>
          </div>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Registrar</button>
          </div>
        </form>

      </div>
    </div>
  </div>
</div>
@endsection


