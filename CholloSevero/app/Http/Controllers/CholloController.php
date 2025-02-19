<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chollo;

class CholloController extends Controller
{
    public function index(){
        // Obtener todos los chollos desde la base de datos
        $chollos = Chollo::all();

        // Pasarlos a la vista
        return view('Chollos.index', compact('chollos'));
    }

    public function escogerChollo($id){
        // Obtener el chollo con el id pasado por parámetro
        $chollo = Chollo::find($id);

        // Pasarlos a la vista
        return view('Chollos.escogerChollo', compact('chollo'));
    }
}
