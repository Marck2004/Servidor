<?php

    include("funciones.php");
    manejarSesion();

    if(count($_POST["borrados"]) == 0){
        header("location:formBorrar.php?minimo=1");
    }else{
        $conn = conectarBBDD("Matriculas3");
        $stmt=$conn->prepare("delete from matriculas where dni = ?");

        foreach ($_POST["borrados"] as $borrado) {
            $stmt->execute([$borrado]);
        }
        print "<p>El borrado fue exitoso</p>";
        print "<p><a href='links.php'>Volver al menu</a></p>";
    }

?>