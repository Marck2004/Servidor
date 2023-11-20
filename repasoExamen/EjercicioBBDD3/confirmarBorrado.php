<link rel="stylesheet" href="style.css">
<?php
    session_start();

    if(isset($_REQUEST['enviar'])){
        if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
            header('location:index.php');
        }else{
            $conexion = mysqli_connect("localhost","root","","repaso") or die("NO SE PUDO CONECTAR");

            print "<a href='index.php'>Pagina principal</a>";

            mysqli_query($conexion,"drop database repaso") or die("No se puede borrar");

            session_unset();

            session_destroy();

            print "<p>Tabla borrada correctamente</p>";
        }
    }else{
        header("location:index.php");
    }
?>