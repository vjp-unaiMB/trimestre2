<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('prueba', function () {
//     return view('routes');
// });

// Route::get('prueba/{id}', function ($id) {
//     return ('cliente con el id ' . $id);
// });

// Route::view('datos/{id?}','datos Vista',['id'=>5446]);

Route::view('blog', 'blog') -> name('noticias');
Route::view('fotos', 'fotos') -> name('galeria');