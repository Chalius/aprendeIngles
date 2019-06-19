<?php

namespace App\Http\Controllers;

use App\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
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


      $request->validate([
          'name' => 'required:max20' ,
          'description' => 'required:max40' ,
          'imagen' => 'required|image|mimes:jpeg,png,jpg|max:2048',
      ]);

      #$img = $request->file('img');
      #$imgName = time().$img->getClientOriginalName();
      $name = $request->get('name');
      $description = $request->get('description');
      $imagen = $request->get('imagen');


      $dictionary = new Dictionary();
      $dictionary->palabra = $palabra;
      $dictionary->pronunciacion = $pronunciacion;
      $dictionary->nemotecnia = $nemotecnia;
      $dictionary->traduccion = $traduccion;
      $dictionary->img = $imgName;

      $request->img->move(public_path('images'), $imgName);
      $dictionary->save();

      return redirect()->route('success');





    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function show(Achievement $achievement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function edit(Achievement $achievement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achievement $achievement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achievement  $achievement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achievement $achievement)
    {
        //
    }
}
