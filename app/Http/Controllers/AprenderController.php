<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dictionary;
use App\Http\Controllers\Controller; #paginate

class AprenderController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function aprenderPalabras(){
    $words = Dictionary::all()->take(5); # sin paginación
    #$words = Dictionary::paginate(5); # con paginacion
    return view('aprender.aprenderPalabras',compact('words'));
  }
  /*
  public function aprenderPalabras2(Request $words){
    return view('aprender.aprenderPalabras',compact('$words'));
  }
  */
  public function ejercicios(){
    return view('aprender.ejercicios');
  }

  public function examenes(){
    return view('aprender.examenes');
  }

  public function loAprendido(){
    return view('aprender.loAprendido');
  }


}
