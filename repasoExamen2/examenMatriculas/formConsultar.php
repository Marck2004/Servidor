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
    <form action="consultar.php" method="post">
    <p>DNI: <input type="text" name="dni" id="dni"></p>

        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>

        <p>apellido: <input type="text" name="apellido" id="apellido"></p>

        <p>direccion: <input type="text" name="direccion" id="direccion"></p>

        <p>telefono: <input type="text" name="telefono" id="telefono"></p>

        <input type="submit" value="Insertar" name="enviar">
    </form>
</body>
</html>