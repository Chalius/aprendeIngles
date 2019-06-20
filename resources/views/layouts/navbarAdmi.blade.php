<nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{URL::asset('webimages/minilogo.png')}}" height="40px" width="40px" style="" class="mx-auto d-block">
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
               <!-- OPCIONES DE NAVEGACION  -->
               @auth

               <li class="nav-item">
                    <a class="nav-link text-white" href="{{url("/main")}}">Inicio </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{url("/administrar/listar")}}">Listar palabras </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url("/administrar/buscar") }}"> Buscar  </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url("/administrar/agregar") }}"> Nueva Palabra </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ url("/administrar/logros") }}"> Nuevo logro </a>
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
                    <li class="nav-item ">
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
