<?php
    session_start();

        if(!isset($_SESSION['resultado'])){
            header('location:bbddInexistente.php');
        }else{
            if(isset($_REQUEST['eliminar'])){
                $conexion = mysqli_connect("localhost","root","","listados");
                mysqli_query($conexion,"drop database listados");
                session_unset();
                session_destroy();
                print "<a href='index.php'>Volver a inicio</a>";
                print "<p>Se han destruido todos los datos</p>";
            }else if(isset($_REQUEST['paginaInicial'])){
                header('location:index.php');
            }
        }
?>