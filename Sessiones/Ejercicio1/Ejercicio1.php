<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php

        session_start();

            if(isset($_REQUEST['enviar'])){
                $_SESSION['nombre'] = $_REQUEST['nombre'];
                $_SESSION['contraseña'] = $_REQUEST['contraseña'];
                header('location:Sesionesb.php');
            }

    ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" >
        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
        <p>Contraseña: <input type="password" name="contraseña" id="contraseña"></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>