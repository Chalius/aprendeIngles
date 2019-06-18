<?php

namespace App\Http\Controllers;

use App\Aprendidas;
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
    public function store(Dictionary $words) #ARREGLANDO
    {
      //Funcion llamada por el boton "aprendido!"
      $learned=new Aprendidas();
      #$ids=array();
      #foreach ($words as $word) {
        #array_push($ids,$word->get('_id'));
        $learned->palabra = $words;
        $learned->save();
      #}


      #$learned->idPalabra1=$request->get('idPalabra');
      #$learned->fechaRepaso1=\Carbon::now();

      #$learned->save();
      /*
      $learned->idPalabra2=$request->get('idPalabra');
      $learned->fechaRepaso2=$request->now();

      $learned->idPalabra3=$request->get('idPalabra');
      $learned->fechaRepaso3=$resquest->now();

      $learned->idPalabra4=$request->get('idPalabra');
      $learned->fechaRepaso4=$request->now();

      $learned->idPalabra5=$request->get('idPalabra');
      $learned->fechaRepaso5=$request->now();
      */

      return redirect()->route('aprendePalabras');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aprendidas  $aprendidas
     * @return \Illuminate\Http\Response
     */
    public function show(Aprendidas $aprendidas)
    {$words = Dictionary::all()->take(5); # sin paginación
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
