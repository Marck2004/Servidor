<?php

    if(empty($_REQUEST['cabecera']) || preg_match('/^[www.]$/')){
        header("location:direccion.php?error=1");
    }else{
        header("location:".$_REQUEST['cabecera']);
    }

?>