<?php

    $abrirLectura = fopen("./contador.txt",'r+');

        if(!$abrirLectura) die ("ERROR: El fichero no ha podido abrirse");

        $valorinicio = fgets($abrirLectura);

        $suma = $valorinicio + 1;

        rewind($abrirLectura);

        fwrite($abrirLectura,$suma);

        fclose($abrirLectura);
?>
