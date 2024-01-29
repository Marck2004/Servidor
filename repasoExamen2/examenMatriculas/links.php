<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("funciones.php");
        manejarSesion();
    ?>  
    <ul>
        <li><a href="formInsertar.php">Insercion</a></li>
        <li><a href="formBorrar.php">Baja</a></li>
        <li><a href="formModif.php">Modificacion</a></li>
        <li><a href="formConsultar.php">Consultar</a></li>
        <li><a href="listarDirectorios.php">Listar</a></li>
        <li><a href="salir.php">Terminar Sesion</a></li>
    </ul>
</body>
</html>