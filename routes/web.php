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

Route::get('/admin', 'AdminController@index');
Route::post('/admin', 'AdminController@show');

Route::get('/adminReg','AdminController@form');
Route::post('/adminReg','AdminController@store');

Route::get('/cerrarAdmin/{id}','AdminController@destroy');

Route::get('/admin.users','AdminController@users');

Route::get('/admin.posteos/{id}','AdminController@posteos');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/homeAdmin', function(){
    return view('/homeAdmin');
});

Route::resource('/publicar','PublicarController');

Route::post('/cuenta','CuentaController@edit');

Route::resource('/cuenta','CuentaController');

Route::put('/cuenta','CuentaController@update');

Route::put('/cuenta/{avatar}', 'CuentaController@show');

Route::post('/home','HomeController@busqueda');

Route::get('/detalleproducto/{id}','HomeController@detalle');

Route::get('/busqueda','busquedaController@index');

Route::get('/detalleCategoria/{id}','BusquedaController@indexCat');

Route::get('/admin.codes','CodesController@index');
Route::post('/admin.codes','CodesController@store');
