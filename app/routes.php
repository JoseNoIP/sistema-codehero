<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$vendedores = Vendedor::with('productos') -> get();
	return View::make('inicio', array('vendedores', $vendedores));
});

Route::get('vendedor', 'VendedorController@mostrarVendedores');
Route::post('vendedor', 'VendedorController@crearVendedor');
Route::get('producto', 'ProductoController@mostrarProductos');	
Route::post('producto', 'ProductoController@crearProducto');