<?php

    include("funciones.php");

    manejarSesion();
    $directorio =scandir("imagenes");
    print "<ul>";
    foreach ($directorio as $ficheros) {
        if($ficheros != "." && $ficheros != ".."){
        print "<li>$ficheros</li>";
    }
    }
    print "</ul>";
    print "<p><a href='links.php'>Volver al menu</a></p>";
?>