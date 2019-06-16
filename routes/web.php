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

Route::get('/main','MainController@index');

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
Route::get('/administrar/editar', 'DictionaryController@index');