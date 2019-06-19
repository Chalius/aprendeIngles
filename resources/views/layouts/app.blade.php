<!-- INICIO DE SEGUNDA NAVBAR-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">

  <!-- BOOTSTRAP DESCARGADO DE AQUAMARINE 
  <link href="{{asset('plugins/aquamarine.css') }}" rel="stylesheet">
  -->

</head>

<body>
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

                                    <a class="nav-link text-dark" href="{{url('/aprender/examenes')}}">Exámenes </a>

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




<div class="py-5">
    <div class="container">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</div>



  <div class="py-3 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-6 p-3"> 

                <img src="{{URL::asset('webimages/logo.png')}}" height="100px" width="auto" style="" class="mx-auto d-block">  
        </div>
        <div class="col-lg-4 col-6 p-3">
          <p><a href="" target="_blank">Bustamante y Rivero, 410&nbsp;<br>Arequipa, PERU</a></p>
          <p> <a href="">+51 - 985-555150</a></p>
          <p class="mb-0"><a href="">luismancor@hotmail.com</a> </p>
        </div>
        <div class="col-md-4 p-3">
          <h5> <b>Sobre Aprende Ingles</b></h5>
          <p class="mb-0">Es un proyecto de software enfocado a la enseñanza del idioma ingles para nativos hablantes hispanos. Desarrollado principalmente por GQuispe y JMancilla.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <p class="mb-0 mt-2">© 2014-2018 Aprende Ingles. All rights reserved</p>
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" style=""></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" style=""></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" style=""></script>
</body>


</html>

 