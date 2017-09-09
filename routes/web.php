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

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/backend', function(){
    return view('layout');
});

Route::get('/', function(){
    return view('login');
});

/*
|--------------------------------------------------------------------------
| Usuarios
|--------------------------------------------------------------------------
*/
Route::get('/usuarios', function(){
	$list = App\Usuarios::all();
	return view('usuarios', compact('list'));
});
Route::get('/usuarios/create', function(){
	return view('usuarios.create');
});
//api controller
Route::get('/usuarios/all', 'UsuariosController@all');
Route::get('/usuarios/{usuario}', 'UsuariosController@une');