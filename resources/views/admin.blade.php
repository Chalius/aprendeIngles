@extends('layouts.admi')

@section('content')

  <div class="py-5" >
    <div class="container">
      <div class="row">
        <div class="text-center mx-auto col-md-12">
          <h1>Opciones disponibles para editar la aplicacion.</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 p-3">
          <div class="card"> <img class="card-img-top" src="https://www.lavozhispanact.com/wp-content/uploads/2017/08/tia-400x200.jpg" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Listar Palabras</h4>
              <p class="card-text">Este menú sirve para visualizar la lista completa de palabras en la Base de datos</p> <a href="{{url("/administrar/listar")}}" class="btn btn-primary">Ir</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <img class="card-img-top" src="https://vanguardcommunications.net/app/uploads/photo-man-searching-online-e1558646908628-400x200.jpg" alt="Card image cap">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Buscar</h4>
              <p class="card-text">Este menú sirve para buscar palabras de forma individual y su elección.</p> <a href="{{ url("/administrar/buscar") }}" class="btn btn-primary">ir</a>
            </div>
          </div>
        </div>
        <div class="col-md-4 p-3">
          <img class="card-img-top" src="https://www.lavozhispanact.com/wp-content/uploads/2018/10/maquina-400x200.jpg" alt="Card image cap">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Agregar Palabras</h4>
              <p class="card-text">Este menu sirve para agregar nuevas palabras de vocabulario a la base de datos</p> <a href="{{ url("/administrar/agregar") }}" class="btn btn-primary">ir</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5" style="background-image: url(http://www.hdfondos.org/file/17737/3200x1800/crop/shanghai-china-ciudad.jpg); background-position: right bottom;  background-size: cover; background-repeat: repeat; background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="ml-auto p-3 col-md-2 bg-white"> <img class="img-fluid d-block rounded-circle" src="https://img.freepik.com/vector-gratis/fondo-lettering-usted-habla-ingles_23-2147869782.jpg?size=338&amp;ext=jpg"> </div>
        <div class="p-3 col-md-7 mr-auto bg-white text-dark">
          <div class="blockquote mb-0">
            <p>"Mistakes are proof that you are trying"</p>
            <div class="blockquote-footer"> <b>G.Quispe</b>&nbsp;Programer at Aprende ingles.inc</div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
