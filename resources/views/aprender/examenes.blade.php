@extends('layouts.app')

@section('content')

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

@endsection
