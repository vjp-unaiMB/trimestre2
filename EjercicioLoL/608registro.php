<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Unai">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
            <h1>Crear nuevo Usuaario</h1>
            <label for="nomb">Nombre:</label>
            <input type="text" id="nomb" name="nombre" required><br> 
            <label for="user">Usuario:</label>
            <input type="text" id="user" name="usuario" required><br>
            <label for="pasw">Contraseña:</label>
            <input type="text" id="pasw" name="contraseña" required><br>
            <label for="mail">Email:</label>
            <input type="text" id="mail" name="mail" required><br>
            <input type="submit" value="Cambiar">
            <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    //Almacenamos los valores de los campos de formulario.
                    $nombre= $_POST["nombre"];
                    $usuario= $_POST["usuario"];
                    $contraseña= $_POST["contraseña"];
                    $email= $_POST["mail"];
                    
                    //Cifrado de contraseña co password_hash
                    $contraseña = password_hash($contraseña, PASSWORD_DEFAULT);

                    header("Location: 608nuevoUsuario.php?nombre={$nombre}&usuario={$usuario}&contraseña={$contraseña}&email={$email}");
                }
            ?>
        </form>
    </main>
</body>
</html>