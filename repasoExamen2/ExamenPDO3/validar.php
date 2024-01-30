<?php

    include("funciones.php");

    if(isset($_POST["enviar"])){
        $nombre = sanear("nombre");
        $clave = sanear("clave");

        $conn = conectarBBDD("personas");
        try{
        $stmt = $conn->prepare("select * from usuarios where nombre =? and clave=?");
        $stmt->execute([$nombre,$clave]);

        if($stmt->rowCount() == 0){
            header("location:login.php?error=1");
        }else{
            $conn->query("create table if not exists persona(
                id int primary key auto_increment,
                nombre varchar(100) not null,
                apellido varchar(100) not null
            )");

            session_start();
            $_SESSION["usuario"] = $nombre;
            header("location:links.php");
        }
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }else{
        header("location:login.php?error=1");
    }

?>