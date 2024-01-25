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
    ?>
    <form action="buscar.php" method="post">
        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
        <p>Apellido: <input type="text" name="apellido" id="apellido"></p>
        <input type="submit" value="Buscar" name="enviar">
    </form>
</body>
</html>