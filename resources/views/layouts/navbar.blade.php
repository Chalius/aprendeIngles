
<nav class="navbar navbar-expand-md navbar-dark bg-primary fixed-top">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{URL::asset('webimages/minilogo4.png')}}" height="40px" width="40px" style="" class="mx-auto d-block">
    </a>
    <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon" ></span>
          </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto">

          <!-- OPCIONES DE NAVEGACION  -->
      @auth
          <li class="nav-item">
              <a class="nav-link text-white" href="{{url('/')}}">Inicio </a>
          </li>

          <li class="nav-item">
              <a class="nav-link text-white" href="{{ url("/perfil") }}"> Mi perfil </a>
          </li>

           <li class="nav-item">
              <a class="nav-link text-white" href="{{ url("/nosotros") }}"> Sobre nosotros </a>
          </li>

          <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{  __('Aprender')  }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                     <a class="nav-link text-dark" href="{{url('/aprender/aprendePalabras')}}">Aprende palabras </a>

                      <a class="nav-link text-dark" href="{{ url('/aprender/ejercicios') }}">Ejercicios </a>

                      <a class="nav-link text-dark" href="{{url('/aprender/examenes')}}">Buscar </a>

                      <a class="nav-link text-dark" href="{{url('/aprender/loAprendido')}}">Lo aprendido </a>
                  </div>
          </li>
      @endauth

      </ul>
      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
          <!-- Authentication Links -->
          @guest
              <li class="nav-item">
                  <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
              </li>
              @if (Route::has('register'))
                  <li class="nav-item">
                      <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                  </li>
              @endif
          @else
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                      <a class="dropdown-item text-dark" href="{{ action('UserController@edit',  \Auth::user()->id) }}">
                          Editar cuenta
                      </a>

                      <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                         onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                          {{ __('Logout') }}
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          @csrf
                      </form>
                  </div>
              </li>
          @endguest
      </ul>
    </div>
  </div>
</nav>
<div class="py-3 bg-primary">
</div>
