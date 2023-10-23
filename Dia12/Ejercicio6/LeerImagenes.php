<?php

    $abrirFichero = fopen("infopelis.txt","a");
    $abrirDirectorio = opendir("imagenesPeliculas");

    $abrirCopia = opendir("copiaImg");
        if(!$abrirFichero) die ("EROR: no se pudo abrir el archivo");

        while($archivo = readdir($abrirDirectorio)){
            if(!is_dir($archivo)){
            fwrite ($abrirFichero,$archivo);
            $tamaño = "  Tamaño: ".filesize("imagenesPeliculas/".$archivo);
            fwrite ($abrirFichero,$tamaño."\n");
            copy($archivo,"copiaImg/");
        }
    }
    
    
    closedir($abrirDirectorio);
    fclose($abrirFichero);

?>