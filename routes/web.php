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
    return view('Formulario1');
});

Route::get('Formulario1', function () {
    return view('Formulario1');
});

Route::get('Formulario2', function () {
    return view('Formulario2');
});
