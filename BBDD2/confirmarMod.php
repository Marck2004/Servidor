<?php
    session_start();

        if(!isset($_SESSION['resultado'])){
            header('location:bbddInexistente.php');
        }else{
            print "<a href='index.php'>Pagina principal</a>";
            $conexion = mysqli_connect("localhost","root","","listados") or die("NO SE PUDO CONECTAR");

                if(isset($_REQUEST['nombre']) || isset($_REQUEST['apellido'])){
                    print $_REQUEST['id'];
                    $update = mysqli_query($conexion,"update alumno set nombre='".$_REQUEST['nombre'] ."',apellido = '".$_REQUEST['apellido']."' where id=".$_REQUEST['id']);

                    print "<p>Registrado correctamente</p>";
                }
        }
?>