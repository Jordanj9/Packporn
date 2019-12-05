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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inicio', 'HomeController@inicio')->name('inicio');
Route::get('/contenido', 'HomeController@contenido')->name('contenido');
Route::get('/galeria', 'HomeController@galeria')->name('galeria');
Route::get('/preguntas', 'HomeController@preguntas')->name('preguntas');


Route::post('solicitud/publico/crear/', 'SolicitudController@store')->name('solicitud.store');

//GRUPO DE RUTAS PARA LA ADMINISTRACIÓN
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    //SOLICITUD
    Route::resource('solicitud', 'SolicitudController');
    Route::get('solicitud/{id}/delete', 'SolicitudController@destroy')->name('solicitud.delete');

});
