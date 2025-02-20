<?php
// estamos en ▓▓▓ api.php 
use App\Http\Controllers\RecursoController;

use App\Http\Controllers\ChollosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/chollos', [ RecursoController::class, 'index' ]);
