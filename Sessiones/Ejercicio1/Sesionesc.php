<?php

    session_start();

    session_destroy();

    print "<p>DATOS DESTRUIDOS</p>";
    print "<a href='Ejercicio1.php'>Volver al formulario</a>";

?>