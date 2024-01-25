<style>
    table,tr,th,td{
        border:2px solid black;
    }
    img{
        width:50px;
        heigth:50px;
    }
</style>
<?php

    include("funciones.php");
    comprobarSesion();

    $conn = conectarBBDD("Matricula2");

    $stmt = $conn->query("show columns from matriculas");
    $columnas=$stmt->fetchAll(PDO::FETCH_ASSOC);

    print "<table>";

    foreach ($columnas as $campos) {
        print "<th><b>".$campos['Field']."</b></th>";
    }

    $stmt = $conn->query("select * from matriculas");

    foreach ($stmt as $valores) {
        print "<tr>";
        foreach ($columnas as $columna) {
            if($columna["Field"] == "foto"){
                echo "<td><img src='fotos/".$valores[$columna['Field']]."'></td>";
            }else{
                echo "<td>".$valores[$columna['Field']]."</td>";
            }
            
        }
        print "</tr>";
    }

    print "</table>";
    print "<p><a href='links.php'>Volver al formulario</a></p>";
?>