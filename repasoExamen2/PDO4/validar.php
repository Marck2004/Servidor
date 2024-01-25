<?php
    include("funciones.php");
    if(isset($_POST["enviar"])){
        
        $nombre = sanear("nombre");
        $clave = sanear("clave");
        $conn = conectarBBDD("Matricula2");

        $stmt = $conn->prepare("select * from usuarios where nombre = ? and clave = ?");
        $stmt->execute([$nombre,$clave]);

        if($stmt->rowCount() == 1){

            $conn->query("create table if not exists matriculas(
                dni varchar(10) primary key,
                nombre varchar(100) not null,
                apellido varchar(100) not null,
                direccion varchar(100),
                telefono int not null,
                foto varchar(100)
            )");

            session_start();
            $_SESSION["usuario"] = $nombre;
            header("location:links.php");
        }else{
            header("Location:login.php?denegado=1"); 
        }
    }else{
        header("Location:login.php?error=1");
    }

?>