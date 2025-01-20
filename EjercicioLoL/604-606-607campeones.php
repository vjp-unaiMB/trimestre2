<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeones LoL</title>
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

            //607.implementación de PDO::FETCH_ASSOC

            $resultados = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($resultados as $panel) {
                echo "
                    <div class='panel'>
                        <h2>{$panel['nombre']}</h2>
                        <p>{$panel['rol']}</p>
                        <p>{$panel['dificultad']}</p>
                        <p>{$panel['descripcion']}</p>
                        <div class='botones'>
                            <a href='605editar.php?id={$panel['id']}&nombre={$panel['nombre']}&rol={$panel['rol']}&dificultad={$panel['dificultad']}&descripcion={$panel['descripcion']}'><input type='submit' value='Editar'></a>
                            <form action='{$_SERVER['PHP_SELF']}' method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='{$panel['id']}'>
                                <input type='submit' value='Borrar'>
                            </form>
                        </div>
                    </div>";
            }

            //Bloque de eliminación de un personaje en la BD
            if($_SERVER["REQUEST_METHOD"] == "POST"){
                $id= $_POST["id"];

                //Como la conexión ya se hizo arriba solo debemos de ejecutar el script SQL y relacionar las variables con el nombre equivalente en la BD 
                try {
                    $sql = "DELETE FROM campeon WHERE id = :id";
                    $stmt = $conexion->prepare($sql);
                    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    $stmt->execute();
                } catch (PDOException $e) {
                    echo "Error: ". $e->getMessage();
                }
            }
        
        ?>
    </div>
    
</body>
</html>