<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Chollo;
use App\Models\User;

class CholloController extends Controller
{
    public function devolverTodosLosChollos(){
        // Obtenemos todos los chollos desde la api
        $response = Http::get('http://localhost:8000/api/chollos');
        $chollos = collect(json_decode($response->body(),false));
        //$chollos = Chollo::all();

        // Los pasamos a la vista
        return view('Chollos.index', compact('chollos'));
    }



    public function devolverChollosNuevos(){
        // Obtener todos los chollos desde la api
        $response = Http::get('http://localhost:8000/api/chollos');
        $chollos = collect(json_decode($response->body(), false));
    
        // Ordenamos por ID de manera descendente y tomar los últimos 8 chollos
        $chollos = $chollos->sortByDesc('id')->take(8);
    
        // Los pasamos a la vista
        return view('Chollos.nuevos', compact('chollos'));
    }



    public function devolverChollosDestacados(){
        // Obtenemos todos los chollos desde la api
        $response = Http::get('http://localhost:8000/api/chollos');
        $chollos = collect(json_decode($response->body(),false));

        // Obtenemos los últimos 8 chollos ordenados por puntuación de manera descendente
        $chollos = $chollos->sortByDesc('puntuacion')->take(8);

        // Los pasamos a la vista
        return view('Chollos.destacados', compact('chollos'));
    }



    public function mostrarChollo($id){
        // Obtenemos el chollo con el id pasado por parámetro
        $chollo = Chollo::find($id);

        // Los pasamos a la vista
        return view('Chollos.pagChollo', compact('chollo'));
    }



    public function editarChollo($id){
        // Obtenemos el chollo con el id pasado por parámetro
        $chollo = Chollo::find($id);

        // Los pasamos a la vista
        return view('Chollos.pagEditarChollo', compact('chollo'));
    }


    // Aplicar cambios a la BD con los tatos del formulario
    public function aplicarEdicion(Request $request, $id) {
        //buscamso por ID
        $chollo = Chollo::find($id);
        
        // Validamos los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:250',
            'descripcion' => 'required|string|max:250',
            'url' => 'required|url|max:250',
            'puntuacion' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'precioDescuento' => 'required|numeric|min:0',
        ]);

        // Actualizamos los datos del chollo
        $chollo->update([
            'titulo' => $request->nombre,
            'descripcion' => $request->descripcion,
            'url' => $request->url,
            'categoria' => $request->categoria,
            'puntuacion' => $request->puntuacion,
            'precio' => $request->precio,
            'precio_descuento' => $request->precioDescuento,
        ]);
    
        // Nos devuelve a la vista
        return redirect()->route('index');
    }


    //  Creamos un nuevo chollo
    public function crearChollo(Request $request){
        // Validamos los datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:250',
            'descripcion' => 'required|string|max:250',
            'url' => 'required|url|max:250',
            'puntuacion' => 'required|integer|min:0',
            'precio' => 'required|numeric|min:0',
            'precioDescuento' => 'required|numeric|min:0',
        ]);

        // Insertamos el nuevo chollo en la base de datos
        $chollo = Chollo::create([
            'titulo' => $request->nombre,
            'descripcion' => $request->descripcion,
            'url' => $request->url,
            'puntuacion' => $request->puntuacion,
            'precio' => $request->precio,
            'categoria' => "Inicio",
            'disponible' => true,
            'precio_descuento' => $request->precioDescuento,
        ]);

        if ($request->hasFile('imagen')) {
            $imagen = $request->file('imagen');
            $nombreImagen = $chollo->id . '.png'; // ID.extension
            $rutaImagen = 'img/'; // Carpeta donde guardar
            $imagen->move(public_path($rutaImagen), $nombreImagen); // Guardar imagen en public/imagenes/chollos
        }
        // Redirigimos al usuario a la página principal 
        return redirect('/');
    }


    //Eliminar chollos
    public function eliminarChollo($id) {

        // Buscamos el chollo en la base de datos
        $chollo = Chollo::find($id);

        // Eliminamos el chollo
        $chollo->delete();

        // Redirigimos a index
        return redirect('/');
    }


    //devolvemos todos los Usuarios desde la base de datos
    public function devolverTodosLosUsers(){       
        $users = User::all();

        return view('Chollos.pagUsuarios', compact('users'));
    }

}
