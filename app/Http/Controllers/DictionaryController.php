<?php

namespace App\Http\Controllers;

use App\Dictionary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DictionaryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth')->except('search');
    }


    public function index()
    {
        $dictionary = Dictionary::all();
        return view('POR INDICAR VISTA', compact('dictionaries'));

    }

    public function create()
    {
        return view('crear.agregarPalabra');
    }

    public function store(Request $request)
    {
        //
    }

  
    public function show(Dictionary $dictionary)
    {
        return view('aprender.aprendePalabras', ['dictionary' => Dictionary::find($id)]);
    }

 
    public function edit(Dictionary $dictionary)
    {
        //
    }

  
    public function update(Request $request, Dictionary $dictionary)
    {
        //
    }

 
    public function destroy(Dictionary $dictionary)
    {
        //
    }
}
