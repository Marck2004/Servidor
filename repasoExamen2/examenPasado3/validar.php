<?php

    include("funciones.php");
    if(isset($_POST["enviar"])){
    $conn = conectarBBDD("marzo3");
    $nombre = sanear("nombre");
    $clave = sanear("clave");

        $stmt=$conn->prepare("select * from User where username = ? and passwd=?");

        $stmt->execute([$nombre,$clave]);

        if($stmt->rowCount() == 0){
            print "<p>Acceso no autorizado</p>";
            print "<p>[ <a href='login.php?error=1'>Conectar</a> ]</p>";
        }else{
            $conn->query("create table if not exists viviendas(
                id int auto_increment primary key,
                tipo enum('Piso','Chalet','Casa','Adosado') default 'Piso' not null,
                zona enum('Centro','Nervion','Triana','Aljarafe','Macarena') default 'Centro' not null,
                direccion varchar(100) not null,
                dormitorios int not null,
                precio int not null,
                tamaño int not null,
                extras set('Piscina','Garaje','Jardin','Sauna') not null,
                foto varchar(100)
            )");
            session_start();
            $_SESSION["usuario"] = $nombre;
            header("location:links.php");
        }
    }else{
        header("location:login.php?error=1");
    }
?>