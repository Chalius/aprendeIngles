@extends('layouts.app')

@section('content')
<div class="py-5 text-center" style="background-image: url('https://www.lemaydigital.com/wp-content/uploads/2018/02/great-feature-image-800x400.jpg');background-size:cover;">
   <div class="container">
     <div class="row">
       <div class="bg-white p-5 mx-auto col-md-8 col-10">
         <h3 class="display-3">Lo aprendido</h3>
         <p class="mb-4">Estas son las palabras aprendidas, puedes revisar nuevamente las palabras y sus traducciones, en caso de que quieras aprender nuevas palabras, accede al menu de "Aprende palabras." </p>
       </div>
     </div>
   </div>
 </div>

 <div class="py-5" style="">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="table-responsive" style="" >
           @if(count($diccionario) )

           <table class="table table-striped table-hover" style="text-align: center;">
             <thead>
               <tr class="table-secondary">
                 <th scope="col">Imagen</th>
                 <th scope="col">Ingles</th>
                 <th scope="col">Traducción</th>
                 <th scope="col">Pronunciación</th>
                 <th scope="col">Nemotecnia</th>
               </tr>
             </thead>
             @foreach($diccionario as $word)
             <tbody>
               <tr>
                 <td class="w-25">
                     <img src="{{ asset('images/'. $word->img) }}" class="img-fluid img-thumbnail" alt="Aqui va una imagen" style="max-width: 400px;">   
                 </td>
                 <td class="align-middle">{{$word->palabra}}</td>
                 <td class="align-middle">{{$word->traduccion}}</td>
                 <td class="align-middle">{{$word->pronunciacion}}</td>
                 <td class="align-middle">{{$word->nemotecnia}}</td>
               </tr>
                
             </tbody>
           @endforeach
           </table>
         @else
           <h3>Todavía no tienes palabras estudiadas.</h3>
         @endif
         </div>
       </div>
     </div>
   </div>
 </div>


@endsection
