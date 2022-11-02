<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\registrarEmpresasController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/registrarEmpresas','App\Http\Controllers\registrarEmpresasController@index'); //para tener todos los registros y mostrarlos
Route::post('/registrarEmpresas','App\Http\Controllers\registrarEmpresasController@store'); //crear un registro
Route::get('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@show'); //para mostrarlos los registros
Route::put('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@update'); //actualizar un registro
Route::delete('/registrarEmpresas/{id}','App\Http\Controllers\registrarEmpresasController@destroy'); //borrar un registro

Route::get('/TipoNegocio','App\Http\Controllers\tipoNegocioController@index'); //para tener todos los registros y mostrarlos
Route::post('/TipoNegocio','App\Http\Controllers\tipoNegocioController@store'); //crear un registro
Route::put('/TipoNegocio/{id}','App\Http\Controllers\tipoNegocioController@update'); //actualizar un registro
Route::delete('/TipoNegocio/{id}','App\Http\Controllers\tipoNegocioController@destroy'); //borrar un registro

Route::get('/Producto','App\Http\Controllers\productoController@index'); //para tener todos los prodcutos y mostrarlos
Route::post('/Producto','App\Http\Controllers\productoController@store'); //crear un registro
Route::get('/Producto/{id}','App\Http\Controllers\prodcutoController@show'); //para mostrarlos los registros
Route::put('/Producto/{id}','App\Http\Controllers\productoController@update'); //actualizar un registro
Route::delete('/Producto/{id}','App\Http\Controllers\productoController@destroy'); //borrar un registro

Route::get('/Categoria','App\Http\Controllers\CategoriaController@index'); //para tener todas las categorias y mostrarlas
Route::post('/Categoria','App\Http\Controllers\CategoriaController@store'); //crear un registro
Route::get('/Categoria/{id}','App\Http\Controllers\CategoriaController@show'); //para mostrar todas las categorias
Route::put('/Categoria/{id}','App\Http\Controllers\CategoriaController@update'); //actualizar un registro
Route::delete('/Categoria/{id}','App\Http\Controllers\CategoriaController@destroy'); //borrar un registro
