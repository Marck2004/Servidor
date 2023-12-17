<?php

    include("funciones.php");
    session_start();
    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

        $conexion = conectarBBDD("Agenda");

        foreach ($_REQUEST['borrados'] as $borrado) {
            $borrar = "delete from personas where id=?";

            $resultado = $conexion->prepare($borrar);

            $resultado ->execute([$borrado]);

        }
        $select = "select * from personas";

        $resultadoSelect = $conexion->query($select);

        print "<table style='border:2px solid black'>";
        foreach ($resultadoSelect as $registros) {
            print "<tr style='border:2px solid black'>";
                        print "<td style='border:2px solid black'>$registros[id]</td>";
                        print "<td style='border:2px solid black'>$registros[Nombre]</td>";
                        print "<td style='border:2px solid black'>$registros[Apellido]</td>";
                        print "<td style='border:2px solid black'>$registros[Direccion]</td>";
                        print "<td style='border:2px solid black'>$registros[Tlf]</td>";
                        print "</tr>";
        }
        print "</table>";
        print "<a href='links.php'>Volver al formulario</a>";

    }else{
        header("location:index.php?error=1");
    }

?>