<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AprenderController extends Controller
{
  public function __construct(){
    $this->middleware('auth');
  }

  public function aprenderPalabras(){
    return view('aprender.aprenderPalabras');
  }

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
