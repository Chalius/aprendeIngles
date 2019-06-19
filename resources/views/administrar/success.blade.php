@extends('layouts.admi')

@section('content')
<div class="py-5" style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url(https://blog.tunubi.com/wp-content/uploads/2018/04/SEO-1-800x500.png); background-position: center center, center center;  background-size: 100%, 100%;  background-repeat: repeat, repeat;" >
   <div class="container">
     <div class="row">
       <div class="col-md-6 col-10 bg-white p-5 mx-auto mx-md-0 text-dark">
       @if (session('status'))
           <div class="alert alert-success" role="alert">
               {{ session('status') }}
           </div>
       @endif
         <h2>Registro ingresado con exito!</h2>
         <p class="mb-3">Si aun deseas ingresar otra palabra a la base de datos puedes regresar con el boton de nuevo registro.</p> <a class="btn btn-primary" href="{{ url("/administrar/agregar") }}">Nuevo registro</a>
       </div>
     </div>
   </div>
 </div>
@endsection
