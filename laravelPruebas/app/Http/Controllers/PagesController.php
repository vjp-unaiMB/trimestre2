<?php

// PagesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Nota;

class PagesController extends Controller
{
    public function inicio() { return view('welcome'); }

    public function datos() { 
        return view('usuarios', ['id' => 56]);
    }

    public function cliente($id = 1) {
        return ('Cliente con el id: ' . $id);
    }

    public function nosotros($nombre = null) {
        $equipo = [
            'Paco',
            'Enrique',
            'Maria',
            'Veronica'
        ];

        return view('nosotros', @compact('equipo', 'nombre'));
    }

    public function notas() {
        $notas = Nota::all();
      
        return view('notas', compact('notas'));
    }

    public function detalle($id) {
        $nota = Nota::findOrFail($id);
      
        return view('notas.detalle', compact('nota'));
      }

    public function crear(Request $request) {
        $notaNueva = new Nota;
    
        $notaNueva -> nombre = $request -> nombre;
        $notaNueva -> descripcion = $request -> descripcion;
    
        $notaNueva -> save();
    
        return back() -> with('mensaje', 'Nota agregada exitósamente');
    }

    public function post_nota(){
        return view('post_nota');
    }
}


