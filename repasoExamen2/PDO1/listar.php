<style>
    table,th,tr,td{
        border:2px solid black;
    }
</style>
<?php

    include("funciones.php");
    comprobarSesion();

    $conn = conectarBBDD("Agenda2");

    $stmt = $conn->query("select * from personas");

    if($stmt->rowCount() > 0){
    print "<table>";
    echo "  <th>NOMBRE</th>
            <th>APELLIDO</th>
            <th>DIRECCION</th>
            <th>TELEFONO</th>";

    foreach ($stmt as $valor) {
        echo "<tr>
            <td>$valor[nombre]</td>
            <td>$valor[apellidos]</td>
            <td>$valor[direccion]</td>
            <td>$valor[telefono]</td>
        </tr>";
    }
    print "</table>";
?>
<p><a href="links.php">Volver al formulario</a></p>
<?php
}else{
    header("location:links.php?noRegistros=1");
}

?>