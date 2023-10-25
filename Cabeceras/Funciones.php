<?php

    function validar($validado){
        if(!filter_var($validado,FILTER_VALIDATE_URL)){
            return 1;
        }else{
            return 0;
        }
    }
    function sanear($saneado){
        return htmlspecialchars(trim(strip_tags($saneado)),ENT_QUOTES,'utf-8');
    }

?>