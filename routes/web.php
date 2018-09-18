<?php
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return redirect('encuestaspy');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'admin'], function () {
Route::get('/administracion', 'AdminController@index');
/*admin controllers*/
Route::resource('/empresas', 'CargaEmpresaController');
Route::resource('cambiar-pass','CambiarPassEmpresaController');
Route::resource('crear-encuesta','RealizarEncuestaController');
Route::resource('encuestas', 'CrudEncuestasController');
/*end admin controllers*/
});
/*users controllers */
Route::resource('encuestaspy', 'Users\EmpresaController');
Route::resource('encuestaspy/participar', 'Users\RespuestaController')->middleware('auth');
/*end users controllers*/

