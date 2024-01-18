<?php
include("funciones.php");
    session_start();
    if(isset($_SESSION["usuario"])){
        $conexion = conectarBBDD("Matricula");

        $select = $conexion->query("select * from matriculas");

        print "<table style='border:2px solid black'>";
        echo "<th style='border:2px solid black'>DNI</th>
        <th style='border:2px solid black'>Nombre</th>
        <th style='border:2px solid black'>Apellidos</th>
        <th style='border:2px solid black'>Direccion</th>
        <th style='border:2px solid black'>Telefono</th>
        <th style='border:2px solid black'>Foto</th>";
        foreach ($select as $valor) {
            echo "<tr style='border:2px solid black'>
            <td style='border:2px solid black'>$valor[dni]</td>
            <td style='border:2px solid black'>$valor[nombre]</td>
            <td style='border:2px solid black'>$valor[apellidos]</td>
            <td style='border:2px solid black'>$valor[direccion]</td>
            <td style='border:2px solid black'>$valor[telefono]</td>
            <td style='border:2px solid black'><img src='archivosEnviados/$valor[foto]' style='width:75px;'></td>
            </tr>";
        }
        print "</table>";

        print "<p><a href='links.php'>Volver al formulario</a></p>";
    }else{
        manejarError("No existe la sesion");
        header("location:index.php?sesion=1");
    }

?>