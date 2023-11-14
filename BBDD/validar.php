<?php
        $conexion = mysqli_connect("localhost","root","","datos_empleados");

        $campoUsuario = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
        $campoClave = htmlspecialchars(trim(strip_tags($_REQUEST['clave'])),ENT_QUOTES,'utf-8');

    $consulta = mysqli_query($conexion,"select count(usuario) as usuario from usuario where usuario= '$campoUsuario' and pass= '$campoClave'");
    //$clave = mysqli_query($conexion,"select clave from usuarios where clave='$campoClave'");

    $fila = mysqli_fetch_assoc($consulta);
    $resultado = $fila["usuario"];

    if($resultado != 1){
        $error = 'error=1';
        header('location:Ejercicio1.php?'.$error);
    }else{
        print "<ul>";
            print "<li><a href='select.php?consultar=1'>Lista de empleados</a></li>";
            print "<li><a href='añadir.php'>Agregar Datos</a></li>";
            print "<li><a href='eliminar.php'>Borrar Datos</a></li>";
        print "</ul>";
    }

?>