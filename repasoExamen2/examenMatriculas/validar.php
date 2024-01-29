<?php

    if(isset($_POST["enviar"])){
        include("funciones.php");
        $nombre = sanear("nombre");
        $clave = sanear("clave");

        $conn = conectarBBDD("Matriculas3");
        $stmt=$conn->prepare("select * from usuarios where nombre = ? and clave = ?");

        $stmt->execute([$nombre,$clave]);

        if($stmt->rowCount() != 0){
            $conn->query("create table if not exists matriculas(
                dni varchar(10) primary key,
                nombre varchar(100) not null,
                apellidos varchar(100) not null,
                direccion varchar(100),
                telefono int,
                foto varchar(100)
            )");

            session_start();
            $_SESSION["usuario"] = $nombre;
            header("location:links.php");
        }else{
            header("location:login.php?error=1");  
        }
        
    }else{
        header("location:login.php?error=1");
    }

?>