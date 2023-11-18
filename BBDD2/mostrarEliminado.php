<?php

session_start();

if(!isset($_SESSION['resultado'])){
    header('location:index.php');
}else{
    print "<a href='index.php'>Volver a inicio</a> <br>";
    $conexion = mysqli_connect("localhost","root","","listados");

    if(isset($_REQUEST['enviar']) && isset($_REQUEST['eliminar'])){

        foreach ($_REQUEST['eliminar'] as $value) {
            mysqli_query($conexion,"delete from alumno where id = ".$value);
        }
    print "<p>Registro borrado correctamente</p>";        
}
}

?>