<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/projeto', 'App\Http\Controllers\ProjetoController');

Route::resource('/tipo_evento', 'App\Http\Controllers\TipoEventoController');

Route::resource('/rede_social', 'App\Http\Controllers\RedeSocialController');

Route::resource('/texto', 'App\Http\Controllers\TextoController');

Route::resource('/servico', 'App\Http\Controllers\ServicoController');

Route::resource('/preco', 'App\Http\Controllers\PrecoController');

Route::resource('/sobre', 'App\Http\Controllers\SobreController');

Route::resource('/album', 'App\Http\Controllers\AlbumController');

Route::get('/', function () {
    return view('welcome');
});
