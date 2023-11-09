<?php

    if(isset($_REQUEST['crear']) && !isset($_COOKIE['cookie'])){
        setcookie("crear",$_REQUEST['duracion'],time()+3600);
        
        $creado = 'creado=1&';
        
    }
    if(isset($_REQUEST['comprobar'])){
        $comprobado = 'comprobado=1&';   
    }
    if(isset($_REQUEST['eliminar'])){
        setcookie("crear",$_REQUEST['duracion'],time()-60);
        $eliminado = 'eliminado=1';
    }
    header('location:Ejercicio4.php?'.$creado.$comprobado.$eliminado);

?>