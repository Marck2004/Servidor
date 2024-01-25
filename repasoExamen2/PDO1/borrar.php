<?php

    include("funciones.php");

    comprobarSesion();

    $conn = conectarBBDD("Agenda2");

    $stmt = $conn->prepare("delete from personas where id = ?");

    foreach ($_POST["borrados"] as $eliminar) {
        print $eliminar;
        $stmt->execute([$eliminar]);
    }
    header("location:listar.php");
?>