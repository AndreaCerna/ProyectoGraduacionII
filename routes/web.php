<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ElementoController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\MultaController;
use App\Http\Controllers\TipoPlacaController;
use App\Http\Controllers\PersonaController;
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
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/buscar', [vehiculoController::class, 'buscar'])->name('buscar');
Route::get('/resultados', [vehiculoController::class, 'resultados'])->name('resultados');

Route::get('/buscarP', [PersonaController::class, 'buscarP'])->name('buscarP');
Route::get('/resultadoss', [PersonaController::class, 'resultadoss'])->name('resultadoss');


Route::resource('elementos', ElementoController::class);
Route::resource('usuarios', UsuarioController::class);
Route::resource('cargos', CargoController::class);
Route::resource('vehiculos', VehiculoController::class);
Route::resource('multas', MultaController::class);
Route::resource('tipo-placas', TipoPlacaController::class);
Route::resource('personas', PersonaController::class);

Route::get('/pago', [VehiculoController::class, 'pago']);
Route::get('/pago/pago', [VehiculoController::class, 'procesar_pago'])->name('procesar_pago');

Route::get('/welcome', [VehiculoController::class, 'welcome'])->name('welcome');;



