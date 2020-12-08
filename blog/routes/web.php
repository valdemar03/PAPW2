<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('inicio');
})->name('inicio');

Route::resource('usaurio','UsuarioController');
Route::resource('trailer','TrailerController');

Route::get('juego', function () {
    return view('juego');
})->name('juego');

Route::get('registrarse', function () {
    return view('registrarse');
})->name('registrarse');

Route::get('chat_privado', function () {
    return view('chat_privado');
})->name('chatprivado');

Route::get('agregarContenido', function () {
    return view('agregarContenido');
})->name('agregarContenido');

//Route::post('/','crearUsuario')->name('usuarios.crear');   