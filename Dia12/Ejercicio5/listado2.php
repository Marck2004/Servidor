<?php

        $manejador = opendir("../Ejercicio3");

        
            while($archivo = readdir($manejador)){
                        if(!is_dir($archivo)){
        echo ''.$archivo.' con un tamaño de '.filesize("../Ejercicio3/".$archivo).' bytes su ultima modificacion fue '
        .date("d-m-Y H:i:s",filemtime("../Ejercicio3/".$archivo)).'<br>';
    }     
        }
            closedir($manejador);
        
    ?>