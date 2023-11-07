<?php

    if(isset($_REQUEST['crear']) && !isset($_COOKIE['cookie'])){
        setcookie("cookie",$_REQUEST['duracion'],time()+3600);
        header('location:Ejercicio4.php?creado=1');
    }
    if(isset($_REQUEST['comprobar'])){
        if(isset($_COOKIE['cookie'])){
        header('location:Ejercicio4.php?comprobado=1');
    }else{
        header('location:Ejercicio4.php?');
    }
    }
    if(isset($_REQUEST['eliminar'])){
        setcookie("cookie",$_REQUEST['duracion'],time()-60);
        header('location:Ejercicio4.php?eliminado=1');
    }
    
?>