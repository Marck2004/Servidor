<?php

    include("funciones.php");
    session_start();

    if(isset($_REQUEST['enviar']) && isset($_SESSION['usuario'])){
        $conexion = conectarBBDD("Matricula");
        $delete = "delete from matriculas where dni = ?";
        $ejecDelete = $conexion->prepare($delete);

        foreach ($_REQUEST["eliminados"] as $borrado) {
            $ejecDelete->execute([$borrado]);
        }
        print "<p>La eliminacion resulto un exito</p>";

        //probando refresh
        header("Refresh: 5; URL=listar.php");

    }else{
        manejarError("No existe la sesion");
        header("location:index.php?sesion=1");
    }

?>