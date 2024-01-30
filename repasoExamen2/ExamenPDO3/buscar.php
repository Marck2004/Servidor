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
    try{
    print "<table>";
    foreach ($stmt as $campos) {
        print "<th>$campos[Field]</th>";
    }
    $columnas = $conn->query("show columns from persona");
    $columnas=$columnas->fetchAll(PDO::FETCH_ASSOC);
    foreach ($columnas as $campos) {
        $cadenaSearch[] = $campos['Field'].' like ?'; 
        $executeValores[] = '%'.$_POST[$campos['Field']].'%';
    }

    $cadenaValores = implode(" and ",$cadenaSearch);

    $stmt = $conn->prepare("select * from persona where $cadenaValores");

    $stmt->execute($executeValores);
    
    foreach ($stmt as $fila) {
        echo "<tr>";
        foreach ($columnas as $columna) {
            echo "<td>".$fila[$columna['Field']]."</td>";
        }
        echo "</tr>";
    }

    print "</table>";
}catch(PDOException $e){
    print $e->getMessage();
}
?>
<p><a href="links.php">Volver al menu</a></p>