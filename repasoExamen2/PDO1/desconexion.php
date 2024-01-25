<?php

    include("funciones.php");
    comprobarSesion();

    session_unset();
    session_destroy();
    print "<p>Redirigiendo a la pagina de inicio</p>";
    header("refresh:5 URL=login.php");

?>