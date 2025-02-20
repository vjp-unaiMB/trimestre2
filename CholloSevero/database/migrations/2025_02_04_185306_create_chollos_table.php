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
            $table->timestamps();
        });
    }

        // id único y autoincremental
        // titulo un título para el chollo
        // descripcion descripcion del chollo
        // url un campo para introducir la URL externa del chollo
        // categoria albergará la categoría de los chollos
        // puntuacion un número entero que indique la puntuación del chollo
        // precio para albergar el precio del chollo
        // precio_descuento para albergar el nuevo precio
        // disponible de tipo boolean




    //         INSERT INTO chollos (titulo, descripcion, url, categoria, puntuacion, precio, precio_descuento, disponible) VALUES
    // ('Smartphone X200', 'Potente smartphone con pantalla AMOLED de 6.5 pulgadas', 'https://techstore.com/smartphone-x200', 'Nuevos', 5, 799.99, 858.00, TRUE),
    // ('Laptop Gamer G15', 'Laptop con procesador i7 y tarjeta gráfica RTX 4060', 'https://techstore.com/laptop-g15', 'Destacados', 4, 1499.99, 1810.00, TRUE),
    // ('Auriculares Inalámbricos Pro', 'Auriculares con cancelación de ruido y Bluetooth 5.3', 'https://audiomarket.com/auriculares-pro', 'Inicio', 5, 199.99, 320.00, FALSE),
    // ('Teclado Mecánico RGB', 'Teclado mecánico con switches azules y retroiluminación RGB', 'https://peripheralhub.com/teclado-rgb', 'Nuevos', 4, 89.99, 96.00, TRUE),
    // ('Monitor 4K Ultra HD', 'Monitor de 27 pulgadas con resolución 4K', 'https://displayworld.com/monitor-4k', 'Destacados', 5, 499.99, 540.00, TRUE),
    // ('Smartwatch FitPro', 'Reloj inteligente con monitoreo de salud y GPS', 'https://wearableshop.com/smartwatch-fitpro', 'Nuevos', 3, 149.99, 176.00, TRUE),
    // ('Silla Ergonómica Gamer', 'Silla con ajuste lumbar y reposabrazos 4D', 'https://furnitureplus.com/silla-gamer', 'Destacados', 5, 299.99, 334.00, FALSE),
    // ('Cámara Profesional 4K', 'Cámara para fotografía y video en 4K UHD', 'https://camerashop.com/camara-4k', 'Inicio', 5, 1299.99, 1465.00, TRUE),
    // ('Bocina Bluetooth UltraBass', 'Bocina portátil con sonido envolvente y resistencia al agua', 'https://audiomarket.com/bocina-bluetooth', 'Nuevos', 4, 129.99, 160.00, TRUE),
    // ('Disco Duro Externo 2TB', 'Almacenamiento portátil con conexión USB-C', 'https://storagecenter.com/disco-duro-2tb', 'Destacados', 4, 89.99, 105.00, TRUE),
    // ('Consola de Videojuegos X', 'Consola de última generación con 1TB de almacenamiento', 'https://gaminghub.com/consola-x', 'Inicio', 5, 499.99, 700.00, FALSE),
    // ('Tablet 10" Android', 'Tablet con pantalla Full HD y procesador de 8 núcleos', 'https://techstore.com/tablet-10', 'Nuevos', 3, 259.99, 300.00, TRUE),
    // ('Mouse Inalámbrico RGB', 'Mouse gamer con sensor óptico de 16000 DPI', 'https://peripheralhub.com/mouse-rgb', 'Destacados', 5, 59.99, 78.00, TRUE),
    // ('Router WiFi 6 UltraSpeed', 'Router de alta velocidad con WiFi 6 y tecnología Mesh', 'https://networkingplus.com/router-wifi6', 'Inicio', 4, 199.99, 220.00, TRUE),
    // ('Impresora Multifuncional', 'Impresora láser con escáner y WiFi', 'https://officesupply.com/impresora-multi', 'Nuevos', 3, 179.99, 200.00, FALSE),
    // ('Cargador Rápido USB-C', 'Cargador de 65W compatible con múltiples dispositivos', 'https://powerhub.com/cargador-rapido', 'Destacados', 5, 49.99, 60.00, TRUE),
    // ('Smart TV 55" 4K', 'Televisor inteligente con sistema operativo Android', 'https://hometheater.com/smart-tv-55', 'Inicio', 5, 699.99, 834.00, TRUE),
    // ('Mochila Antirrobo', 'Mochila con cierre de seguridad y puerto USB', 'https://travelgear.com/mochila-antirrobo', 'Nuevos', 4, 79.99, 96.00, TRUE),
    // ('Lámpara LED Inteligente', 'Lámpara con control de voz y ajuste de color', 'https://homelighting.com/lampara-led', 'Destacados', 4, 39.99, 55.00, FALSE),
    // ('Cafetera Automática', 'Cafetera programable con espumador de leche', 'https://kitchenhub.com/cafetera-auto', 'Inicio', 5, 149.99, 174.00, TRUE);
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chollos');
    }
};
