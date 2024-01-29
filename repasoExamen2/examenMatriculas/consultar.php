<style>
    table,th,tr,td{
        border:2px solid black;
    }
</style>
<?php

    include("funciones.php");
    manejarSesion();

    $dni = sanear("dni");
    $nombre = sanear("nombre");
    $apellido = sanear("apellido");
    $direccion = sanear("direccion");
    $telefono = sanear("telefono");

    $conn = conectarBBDD("Matriculas3");

    $stmt=$conn->prepare("select * from matriculas where
        dni like ? and nombre like ? and apellidos like ? and direccion like ? and telefono like ?");

        $stmt->execute(['%'.$dni.'%','%'.$nombre.'%','%'.$apellido.'%','%'.$direccion.'%','%'.$telefono.'%',]);

        print "<table>";
        echo "<th>DNI</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>";

        foreach ($stmt as $campos) {
            echo "<tr>
                <td>$campos[dni]</td>
                <td>$campos[nombre]</td>
                <td>$campos[apellidos]</td>
                <td>$campos[direccion]</td>
                <td>$campos[telefono]</td>
            </tr>";
        }
        print "</table>";
        print "<p><a href='links.php'>Volver al menu</a></p>";
    ?>
