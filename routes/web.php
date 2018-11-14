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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','InicioController@index');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin');

Route::resource('admin/member','MemberController');
Route::resource('admin/nota','NotaController');

// Route::resource('activity','MemberSportController');

Route::get('patin','ActividadController@patin');
Route::get('funcional','ActividadController@funcional');
Route::get('adultos','ActividadController@adultos');
Route::get('especial','ActividadController@especial');
Route::get('futsal','ActividadController@futsal');
Route::get('gym','ActividadController@gym');
Route::get('tela','ActividadController@tela');
Route::get('eventos','ActividadController@eventos');
Route::get('taekwondo','ActividadController@taekwondo');

Route::post('send','mailController@send');
