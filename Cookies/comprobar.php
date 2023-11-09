<?php

    if(isset($_REQUEST['crear']) && !isset($_COOKIE['cookie'])){
<<<<<<< HEAD
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

=======
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
    
>>>>>>> 8f86a5a9cef2f9e6256ad9514b0442deadc761e5
?>