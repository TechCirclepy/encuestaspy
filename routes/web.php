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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/', function () {
    return redirect('encuestaspy');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index');
/*admin controllers*/
Route::resource('/empresas', 'CargaEmpresaController');
Route::resource('cambiar-pass','CambiarPassEmpresaController');
Route::resource('crear-encuesta','RealizarEncuestaController');
Route::resource('encuestas', 'CrudEncuestasController');
/*end admin controllers*/

/*users controllers */
Route::resource('encuestaspy', 'Users\EmpresaController');
Route::resource('encuestaspy/participar', 'Users\RespuestaController');
/*end users controllers*/

