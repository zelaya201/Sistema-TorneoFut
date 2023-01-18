<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JornadasController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TorneoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Usuario;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */
/* Rutas Login */
Route::get('/', [LoginController::class, 'show'])->name('login');

Route::get('/Registrarse', [RegisterController::class, 'show'])->name('login.register');

Route::post('/', [LoginController::class, 'login']);

Route::post('/Registrarse', [RegisterController::class, 'register']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('{torneo}/Inicio', [HomeController::class, 'show'])->middleware('auth')->name('home');

/* Rutas Config Usuario */
Route::put('/Inicio/{usuario}/{url}', [UsuarioController::class, 'update'])->middleware('auth')->name('usuario.update');

Route::post('/Inicio/{usuario}', [UsuarioController::class, 'destroy'])->middleware('auth')->name('usuario.destroy');

/* Rutas torneo */
Route::get('/Torneos', [TorneoController::class, 'index'])->middleware('auth')->name('torneo.index');
    
Route::post('/Torneos', [TorneoController::class, 'store'])->middleware('auth')->name('torneo.store');

Route::get('/Torneos/Nuevo-torneo', [TorneoController::class, 'create'])->middleware('auth')->name('torneo.create');

Route::get('/Torneos/Editar-torneo/{torneo}', [TorneoController::class, 'edit'])->middleware('auth')->name('torneo.edit');

Route::put('/Torneos/{torneo}', [TorneoController::class, 'update'])->middleware('auth')->name('torneo.update');

/* Rutas jornadas */
Route::get('{torneo}/Jornadas', [JornadasController::class, 'index'])->middleware('auth')->name('jornadas.index');