<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user, $id)
    {
        
        $thisUser = $user->find($id);
        return view('users.edit', compact('thisUser'));
       
    }

    public function update(Request $request, User $user, $id)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    
        $thisUser = User::find($id);
        $thisUser->name = $request->get('name');
        $thisUser->email = $request->get('email');
        $thisUser->password = bcrypt($request->get('password'));
        $thisUser->save();
        return redirect()->action('HomeController@index',  \Auth::user()->id)->with('success', 'Cuenta actualizada!');

    }

    public function destroy(User $user, $id)
    {
        $thisUser = $user->find($id);
        $thisUser->delete();
        return redirect()->action('Welcome2Controller@index');
    }



}
