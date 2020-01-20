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
    return view('index');
});

// Route::get('/admin.codes','CodesController@index');
// Route::post('/admin.codes','CodesController@store');

Route::get('/admin2', function(){
    return view('/layouts.admin2');
});

// Route::get('/adminReg','AdminController@form');
// Route::post('/adminReg','AdminController@store');

// Route::get('/admin.pass','AdminController@passForm');
// Route::post('/admin.pass','AdminController@passChange');

// Route::get('/cerrarAdmin/{id}','AdminController@destroy');

Route::get('/admin.users','AdminController@users');

// Route::get('/admin.posteos/{id}','AdminController@posteos');

Route::get('/admin.categorias','AdminController@categorias');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/home', 'AdminController@index');

Route::resource('/publicar','PublicarController');

Route::get('/editarProduct/{id}','EditarProductController@form');
Route::post('/editarProduct','EditarProductController@store');
Route::post('/editarProductImg','EditarProductController@imagen');

Route::get('/eliminarProduct/{id}', 'EditarProductController@destroy');

Route::post('/cuenta','CuentaController@edit');

Route::resource('/cuenta','CuentaController');

// Route::get('/posteos','CuentaController@posteos');

Route::put('/cuenta','CuentaController@update');

Route::put('/cuenta/{avatar}', 'CuentaController@show');

Route::post('/home','HomeController@busqueda');

Route::get('/detalleproducto/{id}','HomeController@detalle');

Route::get('/busqueda','busquedaController@index');

Route::get('/detalleCategoria/{id}','BusquedaController@indexCat');

Route::get('/intereses/{interes}/{id}','HomeController@intereses');

Route::get('/truekeo','TruekeoController@index');
Route::post('/truekeo','TruekeoController@store');


Route::get('/truekeo/propuesta/{product}/{truek}','TruekeoController@propuesta');

Route::get('/desistirPropuesta/{id}','TruekeoController@desiste');
Route::get('/rechazarMensaje/{id}','TruekeoController@rechaza');
Route::get('/eliminarMensaje/{id}','TruekeoController@elimina');

Route::get('/modal/modalMensajes/{id}','ModalController@index');
Route::get('/modal/modalPropuesta/{id}','ModalController@propuesta');
