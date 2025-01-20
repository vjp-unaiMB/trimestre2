<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Unai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeones LoL</title>
</head>
<body>
    <?php 
        $id = isset($_GET['id'])? (int)$_GET['id'] : null;
        $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
        $rol = isset($_GET['rol']) ? htmlspecialchars($_GET['rol']) : '';
        $dificultad = isset($_GET['dificultad']) ? htmlspecialchars($_GET['dificultad']) : '';
        $descripcion = isset($_GET['descripcion']) ? htmlspecialchars($_GET['descripcion']) : '';


        //Creamos la conexión con la BD.
        $datosConexion = require './conexión.php'; //Obtenemos los parámetros de conexión.
        $conexion = new PDO("mysql:host={$datosConexion['nombreHost']};dbname={$datosConexion['nombreBD']};charset=utf8mb4",$datosConexion['usuario'],$datosConexion['contraseña']);
        
        try {
            $sql = "UPDATE campeon SET id = :id,nombre = :nombre,rol = :rol,dificultad = :dificultad,descripcion = :descripcion WHERE id = :id";
            $stmt = $conexion->prepare($sql);
        
            // Asignar parámetros
            $stmt->bindParam(':rol', $rol, PDO::PARAM_STR);
            $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
            $stmt->bindParam(':dificultad', $dificultad, PDO::PARAM_STR);
            $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        
            // Ejecutar
            $stmt->execute();
        
            header("Location: 606campeones.php");
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
    ?>
</body>
</html>