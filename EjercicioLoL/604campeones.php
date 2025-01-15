<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <h1>Campeones de LOL</h1>
    <div class="contenedor">
        <?php
            //Creamos la conexión con la BD
            $datosConexion= require './conexión.php';
            $conexion = new PDO("mysql:host={$datosConexion['nombreHost']};dbname={$datosConexion['nombreBD']};charset=utf8mb4",$datosConexion['usuario'],$datosConexion['contraseña']);

            //Mostramos los datos
            $sql = "SELECT * FROM campeon";
            $statement = $conexion->query($sql);

            foreach ($statement as $panel) {
                echo "
                    <div class='panel'>
                        <h2>{$panel['nombre']}</h2>
                        <p>{$panel['rol']}</p>
                        <p>{$panel['dificultad']}</p>
                        <p>{$panel['descripcion']}</p>
                        <input type='submit' value='Editar'>
                        <input type='submit' value='Eliminar'>
                    </div>";
            }
        
        ?>
    </div>
    
</body>
</html>