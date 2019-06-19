<?php

namespace App\Http\Controllers;

use App\Aprendidas;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Dictionary;
use App\Http\Controllers\Controller; #paginate

class AprendidasController extends Controller
{

    public function __construct(){
      $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request){
      //Funcion llamada por el boton "aprendido!"

      $user=User::find(auth()->id());
      $ids=$request->get('ids');
    //  dd($words);

      foreach ($ids as $id) {
        $learned=new Aprendidas();# funciona con Dictionary y con Aprendidas
        $learned->id = $id;# Segun el campo de $learned ubicará en la vista loAprendido
        #AÑADIR CONDICIONAL PARA QUE NO GUARDE PALABRAS QUE YA ESTAN APRENDIDAS.
        $user->aprendidas()->save($learned);
      }
      return redirect()->route('aprendePalabras');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aprendidas  $aprendidas
     * @return \Illuminate\Http\Response
     */
    public function show(Aprendidas $aprendidas){
      #$words = Dictionary::all()->take(5); # sin paginación
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aprendidas  $aprendidas
     * @return \Illuminate\Http\Response
     */
    public function edit(Aprendidas $aprendidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aprendidas  $aprendidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aprendidas $aprendidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aprendidas  $aprendidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aprendidas $aprendidas)
    {
        //
    }
}

?>
