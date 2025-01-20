<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Unai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeones LoL</title>
    <style>
        body{
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 2em;
            color: white;
        }

        .caja{
            margin: 170px 30%;
            background-color: #36cd36;
            padding: 30px 70px ;
            border-radius: 10px;
            border:2px solid green;
        }
        .borde{
            background-color: grey;
            padding: 10px 30px;
            border-radius: 5px;
            border: 2px solid darkgreen;
        }
    </style>
</head>
<body>
    <?php

use function Laravel\Prompts\alert;

        $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
        $usuario = isset($_GET['usuario']) ? htmlspecialchars($_GET['usuario']) : '';
        $contraseña = isset($_GET['contraseña']) ? htmlspecialchars($_GET['contraseña']) : '';
        $email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : '';

        echo $nombre . $usuario . $contraseña . $email;
        //Creamos la conexión con la BD.
        $datosConexion = require './conexión.php'; //Obtenemos los parámetros de conexión.
        $conexion = new PDO("mysql:host={$datosConexion['nombreHost']};dbname={$datosConexion['nombreBD']};charset=utf8mb4",$datosConexion['usuario'],$datosConexion['contraseña']);
        
        try {
            $sql = "INSERT INTO usuario(nombre, usuario, password, email) VALUES (:nombre,:usuario,:password,:email)";
            $stmt = $conexion->prepare($sql);
        
            // Asignar parámetros
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
            $stmt->bindParam(':password', $contraseña, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        
            // Ejecutar
            $stmt->execute();
    
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
    ?>
    <div class="caja">
        <div class="borde">
           <?php echo "El usuario " . $usuario . " ha sido introducido en el sistema con la contraseña " . $contraseña . "."?>
        </div>
    </div>
</body>
</html>