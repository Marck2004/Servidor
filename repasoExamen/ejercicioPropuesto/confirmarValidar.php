<?php

    if(isset($_REQUEST['confirmar'])){
        if(isset($_REQUEST['entrar']) && $_REQUEST['entrar'] == "si"){
            header("location:sql.php");
        }else{
            header("location:index.php");
        }
    }

?>