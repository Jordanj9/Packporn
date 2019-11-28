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
//GRUPO DE RUTAS PARA LA ADMINISTRACIÓN
Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    //USUARIOS
    Route::resource('user', 'UsersController');
    Route::post('user/password/change/', 'UsersController@changepass')->name('user.changepass');
    Route::get('user/{id}/delete', 'UsersController@destroy')->name('user.delete');
    //CONTACTO
    Route::resource('contacto', 'ContactoController');
    Route::get('contacto/{id}/delete', 'ContactoController@destroy')->name('contacto.delete');
    //NOTICIAS
    Route::resource('noticias', 'NoticiaController');
    Route::get('noticias/{id}/delete', 'NoticiaController@destroy')->name('noticias.delete');
    //DOCUMENTOS
    Route::resource('documentos', 'DocumentosController');
    Route::get('documentos/{id}/delete', 'DocumentosController@destroy')->name('documentos.delete');
    //CONSEJALES
    Route::resource('consejales', 'ConsejalesController');
    Route::get('consejales/{id}/delete', 'ConsejalesController@destroy')->name('consejales.delete');
    //PQR
    Route::resource('pqr', 'PqrController');
    Route::post('pqr/create/post', 'PqrController@store2')->name('pqr.store2');
    Route::get('pqr/{id}/delete', 'PqrController@destroy')->name('pqr.delete');
});
