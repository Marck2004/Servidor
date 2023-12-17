<?php

    include("funciones.php");
    session_start();
    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

        $conexion = conectarBBDD("Agenda");

        foreach ($_REQUEST['borrados'] as $borrado) {
            $borrar = "delete from personas where id=?";

            $resultado = $conexion->prepare($borrar);

            $resultado ->execute([$borrado]);

        }
        
        header("location:formBorrar.php");

    }else{
        header("location:index.php?error=1");
    }

?>