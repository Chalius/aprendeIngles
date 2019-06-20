<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Dictionary;


class EjerciciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }




    public function practice(Request $request){
      #consiguiendo ids de palabras aprendidas del usuario
      $user=User::find(auth()->id());
      $words=$user->aprendidas;
      $wordIds=[];#array con los ids de las palabras aprendidas
      foreach ($words as $word) {
        array_push($wordIds,$word->id);
      }

      $aprendidas=Dictionary::whereIn('_id',$wordIds)->get();#objeto que guarda las palabras memorizadas por el User

      $arrayApren=[];#array que guarda palabras memorizadas por el user
      foreach($aprendidas as $aprendida){
        array_push($arrayApren,$aprendida);
      }

      $random=$arrayApren[array_rand($arrayApren)];#random es un array con campos de 1 palabra

      $randomtra=$request->get('randomtra');
      $respuesta=$request->get('respuesta');

      $traduccionRandom=$random->traduccion;
      if(strncasecmp($respuesta,$randomtra,5)==0)  {
        $resolucion="Correcto";
        #$respuesta="";
        return view('aprender.ejercicios')->with('random',$random)->with('resolucion',$resolucion);
      }else{
        $resolucion="Incorrecto";
        return view('aprender.ejercicios')->with('random',$random)->with('resolucion',$resolucion);
      }


      #return view('aprender.ejercicios',compact('hola'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
