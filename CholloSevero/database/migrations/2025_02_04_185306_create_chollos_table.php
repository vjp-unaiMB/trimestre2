<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('chollos', function (Blueprint $table) {
            $table->id();
            $table->string("titulo");
            $table->string("descripcion");
            $table->string("url");
            $table->string("categoria");
            $table->integer("puntuacion");
            $table->float("precio");
            $table->float("precio_descuento");
            $table->boolean("disponible");
        });

        // id único y autoincremental
        // titulo un título para el chollo
        // descripcion descripcion del chollo
        // url un campo para introducir la URL externa del chollo
        // categoria albergará la categoría de los chollos
        // puntuacion un número entero que indique la puntuación del chollo
        // precio para albergar el precio del chollo
        // precio_descuento para albergar el nuevo precio
        // disponible de tipo boolean
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chollos');
    }
};
