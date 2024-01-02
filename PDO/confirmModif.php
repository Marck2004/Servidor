<?php
include("funciones.php");
    session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){
            print "<a href='links.php'>Volver al formulario</a><br>";
            $conexion = conectarBBDD("Agenda");
            $nombre = sanear("nombre");
            $apellido = sanear("apellido");
            try{
                if(empty($nombre) && empty($apellido)){
                    header("location:modificar.php");
                }else{

            $update = "update personas set Nombre = ?, Apellido = ? where id = ?";

            $confirmUpdate = $conexion->prepare($update);

                $confirmUpdate ->execute([$nombre,$apellido,$_REQUEST['esconder']]);

                print "<p><b>Se ha modificado correctamente el registro</b></p>";
            }
            }catch(PDOException $e){
                print "<p>Error al conectarse a la bbdd ".$e."</p>";
            }
        }else{
            header("location:index.php?error=1");
        }

?>