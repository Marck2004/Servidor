<?php

    include("funciones.php");

    if(isset($_POST["enviar"])){

        $nombre = sanear("nombre");
        $clave = sanear("clave");

        $conn = conectarBBDD("datos_empleados2");

        $stmt = $conn->prepare("select * from usuarios where nombre = ? and clave = ?");
        $stmt->execute([$nombre,$clave]);

        if($stmt->rowCount() == 0){
            header("location:login.php?error=1");
        }else{
            session_start();
            $_SESSION["usuario"] = $nombre;

            $conexion = conectarServidor();
            try{
            $conexion->query("create database if not exists Agenda2");
            $conexion->query("use Agenda2");
            $conexion->query("create table if not exists personas(
                id int auto_increment primary key,
                nombre varchar(15) not null,
                apellidos varchar(25) not null,
                direccion varchar(25) not null,
                telefono int not null
            )");

        header("location:links.php");
        
        }catch(PDOException $e){
            print $e->getMessage();
        }
        }

    }else{
        header("location:login.php?error=1");
    }

?>