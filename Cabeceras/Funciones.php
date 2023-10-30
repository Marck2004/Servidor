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
    function validarEj6($validado){
        if(isset($validado)){
            return 0;
        }else{
            return 1;
        }
    }

    function validarclave($validado){
        if($validado == "z80"){
            return 0;
        }else{
            return 1;
        }
    }
    function validarNombre($validado){
        if(preg_match('/^[A-Za-z]+$/',$validado)){
            return 0;
        }else{
            return 1;
        }
    }
    
?>