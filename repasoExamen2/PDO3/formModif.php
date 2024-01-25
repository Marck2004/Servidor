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
    ?>
    <form action="formModif2.php" method="post">
    <?php
    print "<table>";

    foreach ($columnas as $campos) {
        print "<th><b>".$campos['Field']."</b></th>";
    }
    print "<th>BORRADOS</th>";

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
        echo "<td><input type='radio' name='buscado' value='$valores[dni]'</td>";
        print "</tr>";
    }
    
    print "</table>";
    print "<input type='submit' name='enviar'>";
?>
<p><a href="links.php">Volver al formulario</a></p>
</form>