<?php
    include("funciones.php");
    session_start();
    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

        $nombre = sanear("nombre");
        $dato = sanear("dato");
        
        if(empty($nombre) || empty($dato)){

            if(empty($nombre)){
                $errorNombre = "errorNombre=1&";
            }
            if(empty($dato)){
                $errorDato = "errorDato=1";
            }
            header("location:formAñadir.php?".$errorNombre.$errorDato);
        }else{

        $conexion = conectarBBDD("Agenda");

        try{
            $describe = "show columns from personas like ?";

            $ejecutarDescribe = $conexion->prepare($describe);
            $ejecutarDescribe ->execute([$nombre]);

            if($ejecutarDescribe->rowCount() > 0){
                header("location:formAñadir.php?exceso=1");
            }else{

            print "<p><a href='links.php'>Volver</a></p>";
        /*$alter = "alter table personas add column ? ?";

        $ejecutarAlter = $conexion ->prepare($alter);

        $ejecutarAlter ->execute([$nombre,$dato]);*/

        $conexion ->query("alter table personas add column $nombre $dato ");

        print "<p><b>Columna añadida con Exito</b></p>";
    }
    }catch(PDOException $e){
        print "Fallo con la BBDD ".$e->getMessage();
    }

    }
    }else{
        header("location:index.php?error=1");
    }

?>