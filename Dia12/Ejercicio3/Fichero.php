<?php
    
    $leerFichero = fopen("escribir.txt",'r');

        while(!feof($leerFichero)){
            echo fgets($leerFichero,filesize("./escribir.txt"));
        }
        fclose($leerFichero);

?>