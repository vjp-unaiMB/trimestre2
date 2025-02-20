<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CholloController;
use App\Http\Controllers\HomeController;

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

// Rutas con las que gestionamos el paso de información y redirecciones entre vistas
Route::get('/', [CholloController::class, 'devolverTodosLosChollos'])->name('index');
Route::get('/nuevos', [CholloController::class, 'devolverChollosNuevos'])->name('nuevos');
Route::get('/destacados', [CholloController::class, 'devolverChollosDestacados'])->name('destacados');
Route::get('/pagChollo/{id}', [CholloController::class, 'mostrarChollo'])->name('pagChollo');
Route::get('/pagUsuarios', [CholloController::class, 'devolverTodosLosUsers'])->name('usuarios');
Route::delete('/eliminar{id}', [CholloController::class, 'eliminarChollo'])->name('indexEliminarChollo');
Route::get('/pagEditarChollo{id}', [CholloController::class, 'editarChollo'])->name('pagEditarChollo');
Route::post('/aplicarEdicion{id}', [CholloController::class, 'aplicarEdicion'])->name('aplicarEdicion');

Route::get('/pagCrearChollo', function(){
    return view('Chollos.pagCrearChollo');
})->name('dirigirPagCrearChollo');

Route::post('/crearChollo', [CholloController::class, 'crearChollo'])->name('crearChollo');


Route::get('/home', [HomeController::class, 'index'])->name('home');

Auth::routes();




