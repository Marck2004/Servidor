<?php

    include("funciones.php");
    manejarSesion();

    $conn = conectarBBDD("marzo3");
    $conn->query("drop database if exists marzo3");
    session_unset();
    session_destroy();

    echo "<p>La base de datos ha sido destruida junto con las sesiones</p>";
    echo "<p>Se le esta redirigiendo al login</p>";
    header("Refresh:5; URL=login.php");
?>