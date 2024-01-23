<?php

    session_start();
    include("funciones.php");

    if(isset($_SESSION["usuario"])){
        
        $conexion = conectarBBD("marzo");

        $borrar = "delete from viviendas where id = ?";
        $ejecutarBorrar = $conexion->prepare($borrar);

        foreach ($_POST["borrados"] as $borrado) {
        $ejecutarBorrar->execute([$borrado]);
        }
        header("location:listar.php");

    }else{
        header("location:index.php?error=1");
    }

?>