<?php

    include("funciones.php");

     manejarSesion();
?>

    <p>Estas seguro/a?</p>
    <form action="borrarSesion.php" method="post">
        <input type="submit" value="Si" name="borrar">
        <input type="submit" value="No" name="Cancelar">
    </form>