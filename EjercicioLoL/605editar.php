<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Unai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Campeones LoL</title>
    <style>
        main {
            display: flex;
            justify-content: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        form{
            display: flex;
            flex-direction: column;
            align-items: center;

            background-color: rgb(235, 235, 235);
            border: 1px solid rgb(211, 211, 211);
            border-radius: 5px;
            width: 60%;
            margin-top: 30px;
        }
        input{
            width: 80%;
            padding: 10px;
            border-radius: 5px;
            border: none;
        }
        input[type="submit"]{
            margin-top: 10px;
            background-color:rgb(35, 112, 212);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            width: 40%;
            margin-bottom: 15px;
            
        }

    </style>

</head>
<body>
    <?php
    //Obtenemos los valores ingresados por parámetro almacenándolos en variables.
        $id = isset($_GET['id'])? (int)$_GET['id'] : null;
        $nombre = isset($_GET['nombre']) ? htmlspecialchars($_GET['nombre']) : '';
        $rol = isset($_GET['rol']) ? htmlspecialchars($_GET['rol']) : '';
        $dificultad = isset($_GET['dificultad']) ? htmlspecialchars($_GET['dificultad']) : '';
        $descripcion = isset($_GET['descripcion']) ? htmlspecialchars($_GET['descripcion']) : '';
    
    //Generamos el formulario de edición de datos del personaje añadiéndole los parámetros anteriores.
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'];?>?id=<?=$id;?>" method="post">
            <h1>Editar Campeón</h1>
            <label for="nomb">Cambiar el Nombre:</label>
            <input type="text" id="nomb" name="nombre" value="<?=$nombre;?>" required><br> 
            <label for="rol">Cambiar el Rol:</label>
            <input type="text" id="rol" name="rol" value="<?=$rol;?>" required><br>
            <label for="dif">Cambiar la Dificultad:</label>
            <input type="text" id="dif" name="dificultad" value="<?=$dificultad;?>" required><br>
            <label for="desc">Cambiar la Descripción:</label>
            <input type="text" id="desc" name="descripcion" value="<?=$descripcion;?>" required><br>
            <input type="submit" value="Cambiar">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    
                    //Almacenamos los valores de los campos de formulario.
                    $nombre= $_POST["nombre"];
                    $rol= $_POST["rol"];
                    $dificultad= $_POST["dificultad"];
                    $descripcion= $_POST["descripcion"];

                    //Creamos la conexión con la BD.
                    $datosConexion = require './conexión.php'; //Obtenemos los parámetros de conexión.
                    $conexion = new PDO("mysql:host={$datosConexion['nombreHost']};dbname={$datosConexion['nombreBD']};charset=utf8mb4",$datosConexion['usuario'],$datosConexion['contraseña']);
                    
                    try {
                        $sql = "UPDATE campeon SET id = :id,nombre = :nombre,rol = :rol,dificultad = :dificultad,descripcion = :descripcion WHERE id = :id";
                        $stmt = $conexion->prepare($sql);
                    
                        // Asignamos los parámetros a su referencia de columna.
                        $stmt->bindParam(':rol', $rol, PDO::PARAM_STR);
                        $stmt->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                        $stmt->bindParam(':dificultad', $dificultad, PDO::PARAM_STR);
                        $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
                        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                    
                        // Ejecutamos el statment
                        $stmt->execute();
                    
                        // Redireccionamos al listado de campeones después de la edición.
                        header("Location: 604-606-607campeones.php");
                        
                    } catch (PDOException $e) {
                        echo "Error: " . $e->getMessage();
                    }
                }
            ?>
        </form>
    </main>
</body>
</html>