
@extends('layouts.app')

@section('content')

    <div class="container" style="background-color: rgb(255, 255, 255);">
      

      <div class="jumbotron" style="background-color: rgb(255, 255, 255);">
        <img src="{{URL::asset('webimages/index.png')}}" height="auto" width="75%" style="display: inline; position: static; float: none; text-align: center"  class="mx-auto d-block">
        <h1 class="display-3"><div class="container" style="">
  
        </div>
        <h1 style="text-align: center">Una nueva forma de aprender Ingles</h1>
        <p></p>
 
      <div class="row" style="border:  1px dashed rgb(66, 133, 244); text-align: center;">

        <div class="col-sm-4">
          <img src="{{URL::asset('webimages/300.png')}}" height="128" width="128" style="text-decoration-style: solid;" alt="pronunciacion" class="rounded-circle">
          <h4>Entenderas la pronunciacion de los demas</h4>
          <p>Incluso si tu vocabulario y gramática son perfectos, puedes tener...</p>
        </div>

        <div class="col-sm-4 col-5">
          <img src="{{URL::asset('webimages/301.png')}}" height="128" width="128" style="" alt="escritura" class="rounded-circle">
          <h4>Mejorara tu escritura y vocabulario</h4>
          <p>Mejorar la escritura en ingles es uno de los objetivos que muchas personas</p>
        </div>

        <div class="col-sm-4">
          <img src="{{URL::asset('webimages/302.png')}}"  height="128" width="128" style="" alt="interaccion" class="rounded-circle">
          <h4>Lograras Interactuar con personas de diferentes partes</h4>
          <p>Incluso si los habitantes nativos de ingles a veces tienen problemas...</p>
        </div>
      </div>
    </div>


      <footer class="footer" style="background-color: rgb(255, 255, 255);">
       
        <img src="{{URL::asset('webimages/footer.png')}}" height="180px" max-width="auto" style="img-fluid">
        <img src="{{URL::asset('webimages/footer.png')}}" height="180px" max-width="auto" style="img-fluid">
        <img src="{{URL::asset('webimages/footer.png')}}" height="180px" max-width="auto" style="img-fluid">

      </footer>

   
  </div> <!-- /container -->
  


@endsection
