<?php

    include("funciones.php");

    if(isset($_POST["borrar"])){
        $conn = conectarBBDD("personas");
        $conn->query("drop database if exists perosnas");
        session_start();
        session_unset();
        session_destroy();
        print "<p>Saliendo de la sesion</p>";
        header("Refresh:5; URL=login.php");
    }else if(isset($_POST["cancelar"])){
        header("location:links.php");
    }

?>