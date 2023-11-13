<?php

    $usuario = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
    $clave = htmlspecialchars(trim(strip_tags($_REQUEST['clave'])),ENT_QUOTES,'utf-8');

    if(empty($usuario) || empty($clave)){
        if(empty($usuario)){
            $errorUsuario = 'errorUsuario=1&';
        }
        if(empty($clave)){
            $errorClave = 'errorClave=1&';
        }
        header('location:Ejercicio1.php?'.$errorUsuario.$errorClave);
    }else{
        print "<ul>";
            print "<li><a href='select.php?consultar=1'>Lista de empleados</a></li>";
            print "<li><a href='añadir.php'>Agregar Datos</a></li>";
            print "<li><a href='eliminar.php'>Borrar Datos</a></li>";
        print "</ul>";
    }

?>