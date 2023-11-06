<?php

    if(isset($_REQUEST['crear']) && !isset($_COOKIE['cookie'])){
        setcookie("crear",$_REQUEST['duracion'],time()+3600);
        header('location:Ejercicio4.php?creado=1');
    }
    if(isset($_REQUEST['comprobar'])){
        header('location:Ejercicio4.php?comprobado=1');
    }
    if(isset($_REQUEST['eliminar'])){
        setcookie("crear",$_REQUEST['duracion'],time()-60);
        header('location:Ejercicio4.php?eliminado=1');
    }
?>