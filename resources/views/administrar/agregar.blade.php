@extends('layouts.admi')

@section('content')

<div class="py-5 text-center" style="background-image: url({{URL::asset('webimages/agregarfondo.png')}}); background-size: cover;">
   <div class="container">
     <div class="row">
       <div class="mx-auto col-md-6 col-10 bg-white p-5">
         <h1 class="mb-4">Agregar Palabra</h1>
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
         <form class="text-left" action="{{ action('DictionaryController@store') }}" method="POST" enctype="multipart/form-data">
         @csrf

           <div class="form-group"> <label for="palabra">Palabra</label> 
               <input id="palabra" type="text" class="form-control{{ $errors->has('palabra') ? ' is-invalid' : '' }}" name="palabra" value="{{ old('palabra') }}" autofocus required/> 
               @if ($errors->has('palabra'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('palabra') }}</strong>
                   </span> 
               @endif
           </div>

           <div class="form-group"> <label for="pronunciacion">Pronunciación</label> 
               <input id="pronunciacion" type="text" class="form-control{{ $errors->has('pronunciacion') ? ' is-invalid' : '' }}" name="pronunciacion" value="{{ old('pronunciacion') }}" autofocus required/> 
               @if ($errors->has('pronunciacion'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('pronunciacion') }}</strong>
                   </span> 
               @endif
           </div>

           <div class="form-group"> <label for="nemotecnia">Nemotecnia</label> 
               <input id="nemotecnia" type="text" class="form-control{{ $errors->has('nemotecnia') ? ' is-invalid' : '' }}" name="nemotecnia" value="{{ old('nemotecnia') }}" autofocus required/> 
               @if ($errors->has('nemotecnia'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('nemotecnia') }}</strong>
                   </span> 
               @endif 
           </div>

           <div class="form-group"> <label for="traduccion">Traduccion</label> 
               <input id="traduccion" type="text" class="form-control{{ $errors->has('traduccion') ? ' is-invalid' : '' }}" name="traduccion" value="{{ old('traduccion') }}" autofocus required/> 
               @if ($errors->has('traduccion'))
                   <span class="invalid-feedback" role="alert">
                       <strong>{{ $errors->first('traduccion') }}</strong>
                   </span> 
               @endif 
           </div>

           <div class="form-group my-3"> 
               <input type="file" class="form-control-file{{ $errors->has('img') ? ' is-invalid' : '' }}" id="img" name="img"  required>
               <div class="invalid-feedback">Example invalid custom file feedback</div>

           </div>
           
           <div class="form-group my-4">
             <div class="text-center">
               <button type="submit" class="btn btn-primary">Crear</button>
             </div>
           </div>

         </form>


       </div>
     </div>
   </div>
 </div>
@endsection
