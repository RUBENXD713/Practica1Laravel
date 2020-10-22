<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ComentariossController;
use app\Http\Controllers\ProductosController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
Route::get('Comentarioss',[ComentariossController::class,'getComentario']);
Route::get('Productos',[ProductosController::class,'getProductos']);*/
Route::get('Relacion','ProductosController@Relacion');
Route::get('Productos','ProductosController@getProductos');
Route::get('NewProduct','ProductosController@createProductos');
Route::get('Comentarioss','ComentariossController@getComentario');
Route::get('ComentarioNuevo','ComentariossController@nuevoComentario');
Route::get('ProductoComentario','ComentariossController@comentarioProducto');
Route::get('Eliminar','ComentariossController@delete');
Route::get('EliminarProductos','ComentariossController@Delete');
Route::put('actualizarProducto/{id}','ProductosController@actualizar');
Route::put('actualizarComentario/{id}','ComentariossController@actualizar');
//});
