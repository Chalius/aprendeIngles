


@extends('layouts.app')

@section('content')


      <div class="row">
        <div class="col-md-12">
          <div class="carousel slide" data-ride="carousel" id="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block img-fluid w-100" src="{{URL::asset('webimages/index.png')}}" height="500" width="500"  style="">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="{{URL::asset('webimages/aprende1.png')}}" height="500" width="500" >
                <div class="carousel-caption">

                </div>
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid w-100" src="{{URL::asset('webimages/aprende2.png')}}" height="500" width="500" >
                <div class="carousel-caption">
                </div>
              </div>
            </div> <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel" role="button" data-slide="next"> <span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="px-lg-5 d-flex flex-column justify-content-center col-lg-6">
          <h1>Una de las principales razones a aprender Ingles</h1>
          <p class="mb-3 lead">Esta pagina sigue la metodología de Ramon Campayo para el aprendizaje de idiomas, la cual esta basada principalmente en la memorizacion, el siguiente video muestra a mas detalle dicho metodo.</p>
        </div>
        <div class="col-lg-6">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe src="https://www.youtube.com/embed/RlR4_98T4Yo" allowfullscreen="" class="embed-responsive-item"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-3 text-center" style="" >
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Una nueva forma de aprender Ingles</h1>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-4 p-4"> <img class="img-fluid d-block rounded-circle" src="{{URL::asset('webimages/303.png')}}">
          <h4><b>Entenderas la pronunciacion de los demas</b></h4>
          <p>Incluso si tu vocabulario y gramatica son perfectos, puedes tener problemas para darte a entender por tu pronunciacion.<br>Aprender a pronunciar correctamente las palabras puede ser una de las partes mas dificiles para dominar el Ingles. NOSOTROS TE AYUDAREMOS.</p>
        </div>
        <div class="col-md-4 col-6 p-4"> <img class="img-fluid d-block rounded-circle" src="{{URL::asset('webimages/304.png')}}">
          <h4><b>Mejorara tu escritura y vocabulario</b></h4>
          <p>Mejorar la escritura en ingles es uno de los objetivos que muchas personas tienen al aprender el idioma. No importa que nivel tengas o cual sea el uso que le darás al idioma. Esta habilidad siempre te dara margen para seguir mejorando.</p>
        </div>
        <div class="col-md-4 col-6 p-4"> <img class="img-fluid d-block rounded-circle" src="{{URL::asset('webimages/305.png')}}">
          <h4><b>Lograras interactuar con personas de diferentes partes</b></h4>
          <p>Incluso los hablantes nativos de inglés a veces tienen problemas para comunicarse. Los problemas en la comunicacion se dan cuando se pierde la conexion entre el hablante y el oyente. En un momento dado, la informacion se pierde o distorciona.<br></p>
        </div>
      </div>



@endsection
