<?php

    $abrirFich = fopen("leer.txt",'r');

        $leer = fread($abrirFich,filesize("leer.txt"));

        $abrirFichTexto = fopen("fich_salida.txt",'w');

        $escribir = fwrite($abrirFichTexto,$leer);

    print $escribir;

    fclose($abrirFichTexto);
    fclose($abrirFich);

?>