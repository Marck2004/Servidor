<link rel="stylesheet" href="style.css">
<?php

    session_start();

    print "<a href='index.php'>Pagina principal</a>";

    if(isset($_REQUEST['enviar'])){
        if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
            header("location:index.php");
        }else{

            $conexion = mysqli_connect("localhost","root","","repaso");

            mysqli_query($conexion,"delete from usuario where id='".$_REQUEST['eliminar']."'");

            print "<p>Registro borrado correctamente</p>";
        }
    }
?>