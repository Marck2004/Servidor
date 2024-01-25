<?php

    include("funciones.php");
    comprobarSesion();
?>

<h1>AÑADIR CAMPOS</h1>
    <p>Escriba los datos de la nueva columna</p>
    <form action="campos.php" method="post">
    <p>Nombre de la columna: <input type="text" name="nombre" id="nombre"></p>
    <p>Tipo de datos y tamaño: <input type="text" name="tipo" id="tipo"></p>
    <input type="submit" value="Guardar" name="enviar">
    </form>