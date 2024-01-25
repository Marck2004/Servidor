<?php

    include("funciones.php");
    comprobarSesion();

    $nombre = sanear("nombre");
    $apellido = sanear("apellido");
    $direccion = sanear("direccion");
    $telefono = sanear("telefono");

    if(empty($nombre) || empty($apellido) || empty($direccion) || empty($telefono)){
        if(empty($nombre)){
            $errorNombre = 'errorNombre=1&';
        }
        if(empty($apellido)){
            $errorApellido = 'errorApellido=1&';
        }
        if(empty($direccion)){
            $errorDirecion = 'errorDireccion=1&';
        }
        if(empty($telefono)){
            $errorTelefono = 'errorTelefono=1';
        }
        header("location:formInsertar.php?".$errorNombre.$errorApellido.$errorDirecion.$errorTelefono);
    }else{

        $conn = conectarBBDD("Agenda2");

        $stmt= $conn->prepare("select * from personas where telefono = ?");
        $stmt->execute([$telefono]);

        if($stmt->rowCount() == 1){
            header("location:formInsertar.php?igual=1");
        }else{

            $stmt = $conn->prepare("insert into personas(nombre,apellidos,direccion,telefono)
                values (?,?,?,?)");
            $stmt->execute([$nombre,$apellido,$direccion,$telefono]);

            print "<p>Registro añadido con exito</p>";
            print "<p><a href='links.php'>Volver al formulario</a></p>";
        }

    }

?>