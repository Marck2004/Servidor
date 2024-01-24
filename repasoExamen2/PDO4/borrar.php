<?php
    include("funciones.php");
    session_start();

    if(empty($_SESSION["usuario"]) || !isset($_POST["enviar"])){
        header("location:login.php?error=1");
    }else{
        $conn = conectarBBDD("Matricula2");

        $stmt = $conn->prepare("delete from matriculas where dni = ?");

        foreach ($_POST["borrados"] as $eliminado) {
            $stmt->execute([$eliminado]);
        }
        print "<p>Registro borrado con exito</p>";
        print "<p><a href='links.php'>Volver al formulario</a></p>";
    }
?>