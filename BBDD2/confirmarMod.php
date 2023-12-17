<?php
    session_start();

        if(!isset($_SESSION['resultado'])){
            header('location:bbddInexistente.php');
        }else{
            $conexion = mysqli_connect("localhost","root","","listados") or die("NO SE PUDO CONECTAR");

            print "<a href='index.php'>Pagina principal</a>";

                if(isset($_REQUEST['enviar'])){

                    $update = mysqli_query($conexion,"update alumno set nombre='".$_REQUEST['nombre'] ."',apellido = '"
                    .$_REQUEST['apellido']."' where id=".(int)$_REQUEST['id']) or die("ERROR:NO SE ACTUALIZA");


                    if($update){
                    print "<br><p>Modificado correctamente</p>";
                }
                
                }
        }
?>