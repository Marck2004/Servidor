<?php

    include("funciones.php");
    comprobarSesion();

    $conn = conectarBBDD("Matricula2");

    $stmt = $conn->prepare("delete from matriculas where dni = ?");

    foreach ($_POST["borrados"] as $eliminado) {
        $stmt->execute([$eliminado]);
    }
    print "<p>Registros eliminados correctamente</p><p>Redirigiendo a la pagina</p>";

    header("Refresh:5; URL=listar.php");
?>