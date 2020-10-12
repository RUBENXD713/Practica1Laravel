<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductosController;
use app\Http\Controllers\ComentariossController;
/*
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
Route::get('Relacion/{Nombre?}','ProductosController@Relacion');
Route::get('Productos','ProductosController@getProductos');
Route::get('NewProduct','ProductosController@createProductos');
Route::get('Comentarioss','ComentariossController@getComentario');
Route::get('ComentarioNuevo','ComentariossController@nuevoComentario');
/*Route::get('/', function () {
  return view('welcome');
});*/
