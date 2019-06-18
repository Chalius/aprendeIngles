<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/','Welcome2Controller@index');
#aqui abajo habia un MainController@index
Route::get('/main',function(){
	$user=Auth::user();
	if($user->esAdmin()){
		return view ('/admin');
	}else{
		return view ('/main');
	}
	
});


Route::get('/perfil','MainController@perfil');

Route::get('/aprender','AprenderController@aprenderPalabras');

Route::get('/nosotros','MainController@nosotros');

route::get('/aprender/aprendePalabras','AprenderController@aprenderPalabras');

route::get('/aprender/ejercicios','AprenderController@ejercicios');

route::get('/aprender/examenes','AprenderController@examenes');

route::get('/aprender/loAprendido','AprenderController@loAprendido');

Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


#Rutas del administrador
Route::get('/admin', 'DictionaryController@index')
	->middleware('is_admin')
	->name('admin');


Route::get('/administrar/editar','DictionaryController@edit');

Route::get('/administrar/listar','DictionaryController@listar');

Route::get('/administrar/agregar','DictionaryController@agregar')->name('agregar');

Route::get('/administrar/buscar','DictionaryController@agregar');

Route::post('/administrar/agregar','DictionaryController@store');

#Ruta de success
Route::get('/administrar/agregar/success', 'DictionaryController@success')->name('success');