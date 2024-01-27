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
        comprobarSesion();
        $_SESSION["contador"] = 0;
    ?>
    <H1>MENU</H1>
    <ul>
        <li><a href="formInsertar.php">Insercion</a></li>
        <li><a href="formBorrado.php">Borrado</a></li>
        <li><a href="listar.php">Consulta</a></li>
    </ul>
</body>
</html>