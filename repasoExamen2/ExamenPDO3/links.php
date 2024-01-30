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
    <h1>MENU</h1>
    <ul>
        <li><a href="formAñadir.php">Añadir campos</a></li>
        <li><a href="formInsertar.php">Insertar persona</a></li>
        <li><a href="listar.php">Listar</a></li>
        <li><a href="formBorrar.php">Borrar</a></li>
        <li><a href="formBuscar.php">Buscar</a></li>
        <li><a href="formModif.php">Modificar</a></li>
        <li><a href="formBorrarSesion.php">Borrar sesion</a></li>
    </ul>
</body>
</html>