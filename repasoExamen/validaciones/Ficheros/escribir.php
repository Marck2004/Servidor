<?php

    $abrir = fopen("escrito.txt","w+");

        $escribir = fopen("reescribir.txt","w+");

        $abrirphp = fopen("../validarFichero.php","r");

        $leido = fread($abrirphp,filesize("../validarFichero.php"));

        fwrite($abrir,$leido);


        fwrite($escribir,$leido);

            fclose($abrirphp);
        fclose($escribir);
    fclose($abrir);
?>