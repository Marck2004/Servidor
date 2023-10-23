<?php

    $abrirFichero = fopen("infopelis.txt","a");
    $abrirDirectorio = opendir("imagenesPeliculas");
        mkdir("copiaImg/");
    $abrirCopia = opendir("copiaImg/");
    
        if(!$abrirFichero) die ("EROR: no se pudo abrir el archivo");

        while($archivo = readdir($abrirDirectorio)){
            if(!is_dir($archivo)){
                $archivoDestino = "copiaImg/" . $archivo;
            fwrite ($abrirFichero,$archivo);
            $tamaño = "  Tamaño: ".filesize("imagenesPeliculas/".$archivo);
            fwrite ($abrirFichero,$tamaño."\n");
            copy("imagenesPeliculas/".$archivo,$archivoDestino);
        }
    }
    
    closedir($abrirCopia);
    closedir($abrirDirectorio);
    fclose($abrirFichero);

?>