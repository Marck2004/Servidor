<?php

    $leer = fopen("escribir.txt",'r');

    if(!$leer) die ("ERROR: no se ha podido abrir el fichero");

            $mostrar = fread($leer,filesize("escribir.txt"));
            $mostrar = nl2br($mostrar);
            echo $mostrar;

        fclose($leer);
?>
<p><a href="Ejercicio3.html">Volver al formulario</a></p>