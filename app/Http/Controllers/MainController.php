<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
      return view('main');
    }

    public function perfil(){
      return view('perfil');
    }



    public function nosotros(){
      return view('nosotros');
    }
}
