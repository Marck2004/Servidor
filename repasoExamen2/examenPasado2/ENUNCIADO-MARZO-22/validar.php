<?php
    include("funciones.php");
    if(isset($_POST["enviar"])){

        $nombre = sanear("nombre");
        $clave = sanear("clave");
        $conn = conectarBBDD("marzo2");

        $stmt = $conn->prepare("select * from User where username = ? and passwd = ?");

        $stmt->execute([$nombre,$clave]);

        if($stmt->rowCount() > 0){
            session_start();
            $_SESSION["usuario"] = $nombre;

            $conn->query("create table if not exists viviendas(
                id int auto_increment not null primary key,
                tipo enum('Piso','chalet','casa','adosado') not null default 'Piso',
                zona enum('Centro','Nervion','Triana','Aljarafe','Macarena') not null default 'Centro',
                direccion varchar(100) not null,
                dormitorios int not null default 3,
                precio int not null,
                tamaño int not null,
                extras set('Piscina','Jardin','Garaje','Sauna') not null,
                foto varchar(100)
            )");

            header("location:links.php");
        }else{
            header("location:login.php?error=1");
        }
    }else{
        header("location:login.php?error=1");
    }

?>