<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Achievement;
#use Illuminate\Support\Facades\Achievement;






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
    #$logros=new Achievement;
    $logros=Achievement::All();
    return view('perfil',compact('logros'));
  }



  public function nosotros(){
    return view('nosotros');
  }
}
