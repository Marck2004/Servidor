<?php

    session_start();

    echo "<p>Nombre :".$_SESSION['nombre']."</p>";
    echo "<p>Contraseña :".$_SESSION['contraseña']."</p>";

    session_unset();

    print "<a href='Sesionesc.php'>Destruir datos</a>";

?>