<?php

    include("funciones.php");
    session_start();
    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

        $conexion = conectarBBDD("Agenda");

        if(isset($_REQUEST['borrados'])){

        foreach ($_REQUEST['borrados'] as $borrado) {
            $borrar = "delete from personas where id=?";

            $resultado = $conexion->prepare($borrar);

            $resultado ->execute([$borrado]);

        }
        
        header("location:formBorrar.php");

    }else{
        print "<a href='links.php'>Volver al formulario</a><br>";
                    print "<b style='color:red;'>No ha seleccionado ningun registro</b>";
    }
    }else{
        header("location:index.php?error=1");
    }

?>