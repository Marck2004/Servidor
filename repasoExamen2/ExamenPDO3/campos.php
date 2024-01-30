<?php

    include("funciones.php");
    manejarSesion();

    if(isset($_POST["enviar"])){
        $nombre = sanear("nombre");
        $tipo = sanear("tipo");
        
        $conn = conectarBBDD("personas");

        if(empty($nombre) || empty($tipo)){
            if(empty($nombre)){
                $errorNombre='errorNombre=1&';
            }
            if(empty($tipo)){
                $errorTipo = 'errorTipo=1';
            }
            header("location:formAñadir?".$errorNombre.$errorTipo);
        }else{
            $conn->query("alter table persona add $nombre $tipo");

            print "<p>Nuevo campo añadido con exito</p>";
            print "<p><a href='links.php'>Volver al menu</a></p>";
        }
    }else{
        header("location:login.php?error=1");
    }
?>