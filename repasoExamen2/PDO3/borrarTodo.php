<?php

    include("funciones.php");
    comprobarSesion();

    $conn = conectarBBDD("Matricula2");

    session_unset();
    session_destroy();

    print "<p>La sesion ha sido destruida</p>";
    print "<p><a href='links.php'>Volver al menu</a></p>";

?>