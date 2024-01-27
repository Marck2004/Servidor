<style>
    table,th,tr,td{
        border:2px solid black;
    }
</style>
<?php

    include("funciones.php");
    comprobarSesion();
    $contador = $_SESSION["contador"];

    $conn = conectarBBDD("marzo2");
    $stmt = $conn->query("select * from viviendas");

    if(isset($_GET["sumar"])){
        $contador+=5;
    }else if(isset($_GET["restar"])){
        $contador-=5;
    }
    
    
    if($contador == $stmt->rowCount()){
        $contador = $stmt->rowCount();
    }else if($contador < 0){
        $contador = 0;
    }

    print "<p>Mostrando viviendas de $contador a  de un total de ".$stmt->rowCount()."
    [ <a href='listar.php?restar=$contador'>Anterior</a> | <a href='listar.php?sumar=$contador'>Siguiente</a>]</p>";

    $stmt = $conn->prepare("select * from viviendas limit :contador,5");
    $stmt->bindParam(':contador', $contador, PDO::PARAM_INT);
    $stmt->execute();
    
    print "<table>";
    echo "<th>Tipo</th>
    <th>Zona</th>
    <th>Dormitorios</th>
    <th>Precio</th>
    <th>Tamaño</th>
    <th>Extras</th>
    <th>Foto</th>";

    foreach ($stmt as $valores) {
        echo "<tr>
        <td>$valores[tipo]</td>
        <td>$valores[zona]</td>
        <td>$valores[dormitorios]</td>
        <td>$valores[precio]</td>
        <td>$valores[tamaño]</td>
        <td>$valores[extras]</td>
        <td><img src='imagenes/$valores[foto]' style='width:50px;heigth:50px;'></td>
        </tr>";
    }
    print "</table>";
?>