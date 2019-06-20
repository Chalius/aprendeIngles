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

Route::get('/nosotros','MainController@nosotros');

#APRENDER

	Route::get('/aprender','AprenderController@aprenderPalabras');

	Route::get('/aprender/aprendePalabras','AprenderController@aprenderPalabras')->name("aprendePalabras");
	#Route::post('/aprender/aprendePalabras','AprenderController@aprenderPalabras')->name("aprendePalabras1"); #borrar

	route::get('/aprender/ejercicios','AprenderController@ejercicios');

	route::get('/aprender/examenes','AprenderController@examenes');

	route::get('/aprender/loAprendido','AprenderController@loAprendido');

	Route::post('aprendido','AprendidasController@store');


	Route::post('practice','EjerciciosController@practice');

#FIN APRENDER



#LOGROS

	Route::post('logros','AchievementController@store');

	Route::get('/logros','AchievementController@show')->name("logros");

#FIN LOGROS





#Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


#RUTAS DE ADMINISTRADOR
	Route::get('/admin', 'DictionaryController@index')
		->middleware('is_admin')
		->name('admin');


	Route::get('/administrar/editar','DictionaryController@edit');

	Route::get('/administrar/listar','DictionaryController@listar');

	Route::get('/administrar/agregar','DictionaryController@agregar')->name('agregar');

	Route::get('/administrar/buscar','DictionaryController@buscar')->name('buscar');

	Route::post('/administrar/agregar','DictionaryController@store');

	#Ruta de success
	Route::get('/administrar/agregar/success', 'DictionaryController@success')->name('success');

	#Ruta de busqueda search
	Route::get('/administrar/search', 'DictionaryController@search')->name('search');

	Route::get('/administrar/logros','AchievementController@show');


#FIN RUTAS ADMINISTRADOR





#Ruta de busqueda search
Route::get('/administrar/search', 'DictionaryController@search')->name('search');
#Ruta de busqueda usuario normal
Route::get('/usuario/search', 'DictionaryController@searchUsuario')->name('usuario.search');



#Ruta de destruir palabra de diccionario
Route::delete('/dicionaries/{id}/delete', 'DictionaryController@destroy')->name('dictionary.destroy');

#Ruta para editar palabra
Route::patch('/administrar/{id}', 'DictionaryController@update')->name('dictionary.update');
Route::get('/administrar/{id}/edit', 'DictionaryController@edit')->name('dictionary.edit');


#Rutas para editar usuario admin
Route::get('/user/{id}/edit', 'UserController@edit');

Route::patch('/user/{id}/edit', 'UserController@update');

Route::delete('/user/{id}/delete', 'UserController@destroy');
