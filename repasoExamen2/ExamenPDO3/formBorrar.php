<style>
    table,th,tr,td{
        border:2px solid black;
    }
</style>
<?php

    include("funciones.php");
    manejarSesion();

    $conn=conectarBBDD("personas");
    $stmt=$conn->query("show columns from persona");
    $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <form action="borrar.php" method="post">
    <?php
    print "<table>";
    foreach ($stmt as $campos) {
        print "<th>$campos[Field]</th>";
    }
    print "<th>Borrados</th>";
    $columnas = $conn->query("show columns from persona");
    $columnas=$columnas->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $conn->query("select * from persona");
    $filas=$stmt->fetchAll(PDO::FETCH_ASSOC);
    
    foreach ($filas as $fila) {
        echo "<tr>";
        foreach ($columnas as $columna) {
            echo "<td>".$fila[$columna['Field']]."</td>";
        }
        echo "<td><input type='checkbox' value='$fila[id]' name='borrados[]'></td>";
        echo "</tr>";
    }

    print "</table>";
?>
<p><input type="submit" value="Borrar" name="enviar"></p>
</form>
<p><a href="links.php">Volver al menu</a></p>