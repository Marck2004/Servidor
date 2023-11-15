<?php

if(isset($_REQUEST['cerrarSesion'])){
    session_start();
    if(isset($_SESSION['usuario'])){
    session_unset();
    session_destroy();
    print "<h1>SESION ELIMINADA</h1>";
    }else{
        print "<h1>NO HABIA NINGUNA SESION INICIADA</h1>";
    }
}

?>
    <a href="Ejercicio1.php">Volver a inciar sesion</a>