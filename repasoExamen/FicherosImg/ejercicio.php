<?php

    $abrirFich = fopen("infoImagenes.txt",'w');

    $abrirDirectorio = opendir("imagenesPeliculas");

    mkdir("copiaImagenes");
        while($archivo = readdir($abrirDirectorio)){
            if(!is_dir($archivo)){
                $archivoDestino = "copiaImagenes/".$archivo;
            fwrite($abrirFich, "Nombre: " .$archivo."\n");
            fwrite($abrirFich, "Tamaño: ".filesize("imagenesPeliculas/".$archivo)."\n");
            copy("imagenesPeliculas/".$archivo,$archivoDestino);
            }
        }

?>