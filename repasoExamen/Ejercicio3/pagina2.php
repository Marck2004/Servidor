
    <?php

        $abrirFichLectura = fopen("datos.txt",'r');

            $leer =fread($abrirFichLectura,filesize("datos.txt"));

            print $leer."\n";

    ?>