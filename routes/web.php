<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\InteresController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');

});
// Rutas protegidas por autenticación
Route::middleware(['auth'])->group(function () {
    Route::resource('personas', PersonaController::class);
    Route::resource('intereses', InteresController::class);
    Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
});
