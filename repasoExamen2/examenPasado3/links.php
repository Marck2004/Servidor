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
    <h1>Gestion de viviendas</h1>
    <ul>
        <li><a href="formInsertar.php">Insercion</a></li>
        <li><a href="formBorrar.php">Borrado</a></li>
        <li><a href="listar.php">Consulta</a></li>
    </ul>
    <p><a href="desconexion.php">Desconectar</a></p>
</body>
</html>