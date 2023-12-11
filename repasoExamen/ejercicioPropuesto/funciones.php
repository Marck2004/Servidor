<?php

    function escribirFich($cadena){
        $abrir = fopen("fichErrores.txt","a");

            fwrite($abrir,$cadena."\n");
        
        fclose($abrir);
    }
    function sanear($parametro){
        return isset($parametro) 
            ? htmlspecialchars(trim(strip_tags($parametro)),ENT_QUOTES,'utf-8')
            : "";
    }

    
?>