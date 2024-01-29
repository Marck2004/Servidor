<?php

    include("funciones.php");

    manejarSesion();

    $conn = conectarBBDD("Matriculas3");
    $conn->query("drop database if exists Matriculas3");

    session_unset();
    session_destroy();

    print "<h1>REDIRIGIENDO...</h1>";
    header("Refresh:5; URL=login.php");
?>