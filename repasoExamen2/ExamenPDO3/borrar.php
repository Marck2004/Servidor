<?php

    include("funciones.php");
    manejarSesion();

    if(isset($_POST["enviar"])){
        try{
        $conn = conectarBBDD("personas");
        $stmt = $conn->prepare("delete from persona where id = ?");

        foreach ($_POST["borrados"] as $borrar) {
            $stmt->execute([$borrar]);
        }
    }catch(PDOException $e){
        print $e->getMessage();
    }
        print "<p>La eliminacion ha sido un exito</p>";
        print "<p><a href='links.php'>Volver al menu</a></p>";
    }else{
        header("location:login.php?error=1");
    }
?>