@extends('layouts.admi')

@section('content')
<div class="py-5 text-center" style="background-image: url({{URL::asset('webimages/agregarfondo.png')}}); background-size: cover;">
   <div class="container">
     <div class="row">
       <div class="mx-auto col-md-6 col-10 bg-white p-5">
         <h1 class="mb-4">Editar Palabra</h1>
         <!--CLAUSULA DE VERIFICACION DE SESION-->
         @if ($message = Session::get('success'))
           <div class="alert alert-success alert-block">
               <button type="button" class="close" data-dismiss="alert">X</button>
                   <strong>{{ $message }}</strong>     
           </div>
           <img src="images/{{Session::get('image') }}">
         @endif

         @if (count($errors) > 0)
           <div class="alert alert-danger">
               <strong>Whoops!</strong>There were some problems with your input.
               <ul>
                   @foreach ($errors->all() as $error)
                       <li>{{ $error }}}</li>
                   @endforeach
               </ul>
           </div>
         @endif
         <!--FORMULARIO-->
         <form class="text-left" action="{{ action('DictionaryController@update', $word->id) }}" method="POST" enctype="multipart/form-data">
         @method('PATCH') 
         @csrf

           <div class="form-group"> <label for="palabra">Palabra</label> 
               <input id="palabra" type="text" class="form-control" name="palabra" value="{{ $word->palabra }}"> 
           </div>

           <div class="form-group"> <label for="pronunciacion">Pronunciación</label> 
               <input id="pronunciacion" type="text" class="form-control" name="pronunciacion" value="{{ $word->pronunciacion }}""> 
           </div>

           <div class="form-group"> <label for="nemotecnia">Nemotecnia</label> 
               <input id="nemotecnia" type="text" class="form-control" name="nemotecnia" value="{{ $word->nemotecnia }}""> 
           </div>

           <div class="form-group"> <label for="traduccion">Traduccion</label> 
               <input id="traduccion" type="text" class="form-control" name="traduccion" value="{{ $word->traduccion }}""> 
           </div>

           <div class="form-group my-3"> 
               <input type="file" class="form-control-file" id="img" name="img">
           </div>

           
           <div class="form-group my-4">
             <div class="text-center">
               <button type="submit" class="btn btn-primary">Modificar</button>
             </div>
           </div>

         </form>


       </div>
     </div>
   </div>
 </div>
@endsection



