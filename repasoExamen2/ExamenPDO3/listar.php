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

    print "<table>";
    foreach ($stmt as $campos) {

        print "<th>$campos[Field]</th>";
    
    }
    $columnas = $conn->query("show columns from persona");
    $columnas=$columnas->fetchAll(PDO::FETCH_ASSOC);

    $stmt = $conn->query("select * from persona");
    $stmt=$stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($columnas as $columna) {
        echo "<tr>";
        foreach ($stmt as $valor) {
            echo "<td>".$valor[$columna['Field']]."</td>";
        }
        echo "</tr>";
    }

    print "</table>";
?>
<p><a href="links.php">Volver al menu</a></p>