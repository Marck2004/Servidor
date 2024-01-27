<?php

    include("funciones.php");

    comprobarSesion();

    if(isset($_POST["enviar"])){

        $conn = conectarBBDD("marzo2");

        $stmt = $conn->prepare("delete from viviendas where id = ?");

        foreach ($_POST["borrados"] as $borrado) {
            $stmt->execute([$borrado]);
        }
        print "<p>Registros borrados con exito</p>";

        print "<p><a href='links.php'>Volver al menu</a></p>";
    }else{
        header("location:login.php?error=1");
    }

?>