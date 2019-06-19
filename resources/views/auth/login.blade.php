
@extends('layouts.app')

@section('content')


<div class="py-5 text-center" style="   background-image: url(&quot;http://quattrotenori.es/wp-content/uploads/2015/06/Fondo-Ciudad-de-las-Artes-compressor.jpg&quot;); background-size: cover; background-position: top left;  background-repeat: repeat;" >
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h1 class="mb-4">Log in</h1>
 
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group">       
                           
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Ingresar Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="form-group mb-3">
                                <input id="password" type="password" placeholder="Contraseña" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                        </div>

                        <small class="form-text text-muted text-center">
                            <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-left" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                        </small>
                       <p></p>
            

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

          </form>
        </div>
      </div>
    </div>
  </div>


@endsection
