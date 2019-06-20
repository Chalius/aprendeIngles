<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Dictionary;
use App\User;
use App\Aprendidas;
use App\Http\Controllers\Controller; #paginate

class AprenderController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function aprenderPalabras(){
    #$words = Dictionary::all()->take(5); # sin paginación || FUNCIONA
    #$words = Dictionary::paginate(5); # con paginacion

    $user=User::find(Auth::id());
    $aprendidas=$user->aprendidas;
    $arrayIds=[]; #array donde se guardará ids de words aprendidas by the user.
    foreach ($aprendidas as $aprendida) {
      array_push($arrayIds,$aprendida->id);
    };


    $words=Dictionary::whereNotIn('_id',$arrayIds)->paginate(4);
    #previamente tenia el metodo ->get()


    return view('aprender.aprenderPalabras',compact('words'));
  }
  /*
  public function aprenderPalabras2(Request $words){
    return view('aprender.aprenderPalabras',compact('$words'));
  }
  */
  public function ejercicios(){



    #consiguiendo ids de palabras aprendidas del usuario
    $user=User::find(auth()->id());
    $words=$user->aprendidas;
    $wordIds=[];
    foreach ($words as $word) {
      array_push($wordIds,$word->id);
    }

    $aprendidas=Dictionary::whereIn('_id',$wordIds)->get();#objeto que guarda las palabras memorizadas por el User

    $arrayApren=[];#array que guarda palabras memorizadas por el user
    foreach($aprendidas as $aprendida){
      array_push($arrayApren,$aprendida);
    }

    $random=$arrayApren[array_rand($arrayApren)];#random es un array con campos de 1 palabra


    return view('aprender.ejercicios')->with('random',$random);
    #return view('aprender.ejercicios');
  }

  public function examenes(){
    return view('aprender.examenes');
  }

  public function loAprendido(){
    $user=User::find(Auth::id());
    #$aprendidas=new Aprendidas(); da igual si este código esta o no.
    $aprendidas=$user->aprendidas;
    $arrayIds=[]; #array donde se guardará ids de words aprendidas by the user.
    foreach ($aprendidas as $aprendida) {
      array_push($arrayIds,$aprendida->id);
    };

    $diccionario=Dictionary::whereIn('_id',$arrayIds)->get();
    #$diccionario=Dictionary::all();#funciona, muestra todos los datos del modelo Dictionary

    return view('aprender.loAprendido',compact('diccionario'));
  }


}
