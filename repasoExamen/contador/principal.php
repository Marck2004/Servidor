<?php

    $abrirFich = fopen("contador.txt",'r+');

        $lectura = fread($abrirFich,filesize("contador.txt"));

        rewind($abrirFich);

        fwrite($abrirFich,$lectura + 1);
    
?>