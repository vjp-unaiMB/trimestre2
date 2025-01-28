<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});


Route::view('actividadSitio', 'actividadSitio') -> name('Inicio');
Route::view('nosotros', 'nosotros') -> name('Nosotros');
Route::view('proyecto/{num?}','proyecto',['num'=>1]) -> name('Proyecto');
Route::get('notas', [ PagesController::class, 'notas' ]);
Route::get('notas/{id?}', [ PagesController::class, 'detalle' ]) -> name('notas.detalle');
Route::post('notas', [ PagesController::class, 'crear' ]) -> name('notas.crear');

Route::get('post_nota',[PagesController::class, "post_nota"]);
//Post
Route::post('notas',[PagesController::class.'crear'])-> name('notas.crear');