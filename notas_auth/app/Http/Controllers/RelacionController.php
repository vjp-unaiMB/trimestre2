<?php

namespace App\Http\Controllers;

  use App\Models\Alumno;
  use App\Models\Materia;
  use Illuminate\Http\Request;

  class RelacionController extends Controller
  {
    public function index() {
      $alumno = Alumno::find(1);
      $materia = Materia::find(2);

      return view('muchos', compact('alumno', 'materia'));
    }
  }
