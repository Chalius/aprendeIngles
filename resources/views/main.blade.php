@extends('layouts.app')

@section('content')
<div class="py-5">
<<<<<<< HEAD


   <div class="container justify-content-center" style="background-color: rgb(255, 255, 255);">
   <img src="{{URL::asset('webimages/actitud.png')}}" height="100%" width="100%" style="" class="mx-auto d-block">
  </div>

  <div class="container justify-content-center">
    <h3>
      Dirigete a la zona de aprender desde el menu superior para empezar con tu aprendizaje.
    </h3>

  </div>



=======
  <div class="container">
    <div class="row">
      <div class="text-center mx-auto col-md-12">
        <h1>Opciones para aprender palabras.</h1>
        <p class="lead">Aprender el idioma requiere de mucho esfuerzo y dedicacion, puedes empezar con la seccion de aprender palabras y agregar algunos registros a tu directorio personal.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 p-3">
        <div class="card"> <img class="card-img-top" src="https://www.lavozhispanact.com/wp-content/uploads/2017/08/tia-400x200.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Lista de palabras</h4>
            <p class="card-text">Mediante este menu podras acceder a todas las palabras disponibles en la aplicacion, para que puedas memorizarlas y comprobar tus logros.</p> <a href="{{url('/aprender/aprendePalabras')}}" class="btn btn-primary">Ir</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-3">
        <img class="card-img-top" src="https://vanguardcommunications.net/app/uploads/photo-man-searching-online-e1558646908628-400x200.jpg" alt="Card image cap">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Buscar</h4>
            <p class="card-text">No tienes las ganas de visualizar todas las palabras de un golpe, esta opcion te permite buscar una palabra de forma individual.</p> <a href="{{url('/aprender/examenes')}}" class="btn btn-primary">ir</a>
          </div>
        </div>
      </div>
      <div class="col-md-4 p-3">
        <img class="card-img-top" src="https://www.lavozhispanact.com/wp-content/uploads/2018/10/maquina-400x200.jpg" alt="Card image cap">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Lo aprendido</h4>
            <p class="card-text">Una vez que hayas agregado nuevas palabras a tu repositorio, estas estaran diponibles siempre en tu repositorio para que puedas repasar las veces que quieras</p> <a href="{{url('/aprender/loAprendido')}}" class="btn btn-primary">ir</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="py-5 text-center text-white" style="position: relative; overflow: hidden;" > <video autoplay="" loop="" muted="" plays-inline="" style="position: absolute; right: 0; top: 0; min-width:100%; z-index: -100;">
    <source src="{{URL::asset('webimages/star2.mp4')}}"  type="video/mp4"> </video>
    	<!-- src="https://static.pingendo.com/video-placeholder.mp4" -->
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <h1 class="mb-4 display-3">El limite es el cielo</h1>
        <p class="lead mb-5">La unica limitante a aprender un nuevo idioma, son las ganas que le puedas poner al estudio, sierdo perserverante nada es imposible.</p>
        <a href="{{url('/aprender/aprendePalabras')}}" class="btn btn-lg btn-primary mx-1">Empieza ahora</a>
      </div>
    </div>
  </div>
</div>
<div class="py-5" style="background-image: url(http://www.hdfondos.org/file/17737/3200x1800/crop/shanghai-china-ciudad.jpg); background-position: right bottom;  background-size: cover; background-repeat: repeat; background-attachment: fixed;">
  <div class="container">
    <div class="row">
      <div class="ml-auto p-3 col-md-2 bg-white"> <img class="img-fluid d-block rounded-circle" src="http://artisticthings.com/wp-content/uploads/2010/04/apreis6-400x400.jpg"> </div>
      <div class="p-3 col-md-7 mr-auto bg-white text-dark">
        <div class="blockquote mb-0">
          <p>“It’s about” is a way to highlight the importance of something. For example, “It’s about doing a good job” means what’s important is to do a good job.</p>
          <div class="blockquote-footer"> <b>J.Mancilla</b>&nbsp;Programer at Aprende ingles.inc</div>
        </div>
      </div>
    </div>
  </div>
>>>>>>> origin/master
</div>

@endsection
