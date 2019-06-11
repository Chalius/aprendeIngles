<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use app\User;

class MainController extends Controller
{
  public function __construct(){

    $this->middleware('auth');
  }

  public function index(){
    $user=Auth::id();
    return view('main',['user'=>$user]);
  }

  public function perfil(){
    return view('perfil');
  }



  public function nosotros(){
    return view('nosotros');
  }
}
