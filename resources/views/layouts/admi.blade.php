<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{asset('css/bootstrap.min.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm"  style="background-color: #e3f2fd;">
            <div class="container"  >
                <!--AQUI SE TIENE QUE INGRESAR LA IMAGEN  <img src="http://placehold.it/150x50?text=Logo" alt="">EN VEZ DEL app.name-->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{URL::asset('webimages/minilogo.png')}}" height="40px" width="40px" style="" class="mx-auto d-block">

                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                   <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                        <!-- OPCIONES DE NAVEGACION  -->
                    @auth
                         <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Inicio </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url("/perfil") }}"> Mi perfil </a>
                        </li>

                         <li class="nav-item">
                            <a class="nav-link" href="{{ url("/nosotros") }}"> Sobre nosotros </a>
                        </li>


                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{  __('Aprender')  }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                   <a class="nav-link" href="{{url('/aprender/aprendePalabras')}}">Aprende palabras </a>

                                    <a class="nav-link" href="{{ url('/aprender/ejercicios') }}">Ejercicios </a>

                                    <a class="nav-link" href="{{url('/aprender/examenes')}}">Exámenes </a>

                                    <a class="nav-link" href="{{url('/aprender/loAprendido')}}">Lo aprendido </a>
                                </div>
                        </li>



                    @endauth
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>

</html>
