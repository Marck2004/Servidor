<link rel="stylesheet" href="style.css">

<?php

    session_start();

    if(isset($_REQUEST['enviar'])){
        if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
            header("location;index.php");
        }else{
            print "<a href='index.php'>Pagina principal</a>";

            $conexion = mysqli_connect("localhost","root","","repaso");

            $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
            $apellidos = htmlspecialchars(trim(strip_tags($_REQUEST['apellido'])),ENT_QUOTES,'utf-8');

                mysqli_query($conexion,"update usuario set Nombre='$nombre', Apellidos=
                    '$apellidos' where id=".(int)$_REQUEST['escondido']) or die("ERROR NO SE PUEDE ACTUALIZAR");

                    print "<p>Modificacion realizada con exito</p>";
        }
    }

?>