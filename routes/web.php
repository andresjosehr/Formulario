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

Route::get('/{codigo}', function(){
	return "Hola";
});

 Route::get('/', function(){
	if(isset($_GET["exportar"])){
		return App::call('App\Http\Controllers\DiagnosticoController@ExportExcel');
		die();
	}
	if(isset($_GET["Consulta"])){
		return App::call('App\Http\Controllers\DiagnosticoController@show');
		die();
	}
	return App::call('App\Http\Controllers\DiagnosticoController@index');
	
});


Route::post('/', "DiagnosticoController@store");



Route::get('exportar', "DiagnosticoController@ExportExcel");
Route::get('Excel', function(){
	return view("Excel");
});
