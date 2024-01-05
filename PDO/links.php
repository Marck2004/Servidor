<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    session_start();

    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

    ?>
            <ul>
                    <li><a href="formAñadir.php">Añadir campos a la tabla</a></li>
                    <li><a href="formInsertar.php">Insertar registro</a></li>
                    <li><a href="listar.php">Listar Registros</a></li>
                    <li><a href="formBorrar.php">Borrar registro</a></li>
                    <li><a href="formBuscar.php">Buscar registros</a></li>
                    <li><a href="formModif.php">Modificar registro</a></li>
                    <li><a href="borrarGeneral.php">Borrar sesion</a></li>
            </ul>
        <?php
    }
        ?>
</body>
</html>