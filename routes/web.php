<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\TorneoController;
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

Route::get('/', [LoginController::class, 'show'])->name('login');

//Route::get('/login', [LoginController::class, 'show']);

Route::post('/', [LoginController::class, 'login']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/Inicio', [HomeController::class, 'show'])->middleware('auth')->name('home');

/* Rutas torneo */
Route::get('/Torneos', [TorneoController::class, 'index'])->middleware('auth')->name('torneo.index');

Route::post('/Torneos', [TorneoController::class, 'store'])->middleware('auth')->name('torneo.store');

Route::get('/Torneos/Nuevo-torneo', [TorneoController::class, 'create'])->middleware('auth')->name('torneo.create');

Route::get('/Torneos/Editar-torneo/{torneo}', [TorneoController::class, 'edit'])->middleware('auth')->name('torneo.edit');

Route::put('/Torneos/{torneo}', [TorneoController::class, 'update'])->middleware('auth')->name('torneo.update');