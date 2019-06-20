@extends('layouts.app')

@section('content')
<<<<<<< HEAD

  <div class="py-5">


  <div class="row justify-content-center">
      <h1>Examenes</h1>
  </div>

  <div class="row justify-content-center">
      <h3>Área donde podras realizar tus examenes.</h3>

  </div>
  <br>

  <div class="row justify-content-center">
    <img class="card-img-right flex-auto d-none d-lg-block" src="{{URL::asset('webimages/trabajando.png')}}"  height="300" width="300" alt="logro1">
  </div>

  <div class="row justify-content-center">
    <h4>Estamos trabajando en esta página. Disculpa las molestias.</h4>
  </div>


  </div>
=======
 <div class="py-5 text-center" style="background-image: url('https://www.lemaydigital.com/wp-content/uploads/2018/02/great-feature-image-800x400.jpg');background-size:cover;">
   <div class="container">
     <div class="row">
       <div class="bg-white p-5 mx-auto col-md-8 col-10">
         <h3 class="display-4">Busqueda de Palabras</h3>
         <p class="mb-4">Para buscar palabras ingrese el registro en formato de ingles, por ejemplo si desea verificar la existencia de la palabra "house" tendra que ingresarla en ingles.</p>
         <div class="text-center">

           <form class="form-inline justify-content-center" action=" {{ route('usuario.search')}}" method="GET">
             <div class="input-group">
               <input type="text" class="form-control" id="query" name="query" placeholder="Busqueda">
               <div class="input-group-append">
                 <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button></div>
             </div>
           </form>

         </div>
       </div>
     </div>
   </div>
 </div>
>>>>>>> origin/master
@endsection
