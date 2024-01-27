<style>
    table,th,tr,td{
        border:2px solid black;
    }
</style>
<?php

    include("funciones.php");

    $conn = conectarBBDD("marzo2");

    $stmt = $conn->query("select * from viviendas");
    ?>
    <form action="borrar.php" method="post">
    <?
    print "<table>";

    echo "<th>Tipo</th>
    <th>Zona</th>
    <th>Dormitorios</th>
    <th>Precio</th>
    <th>Tamaño</th>
    <th>Extras</th>
    <th>Foto</th>
    <th>Borrar</th>";

    foreach ($stmt as $valores) {
        echo "<tr>
        <td>$valores[tipo]</td>
        <td>$valores[zona]</td>
        <td>$valores[dormitorios]</td>
        <td>$valores[precio]</td>
        <td>$valores[tamaño]</td>
        <td>$valores[extras]</td>
        <td><img src='imagenes/$valores[foto]' style='width:50px;heigth:50px;'></td>
        <td><input type='checkbox' name='borrados[]' value='$valores[id]'</td>
        </tr>";
    }
    print "</table>";
?>
<input type="submit" value="Borrar" name="enviar">
</form>
<p><a href="links.php">Volver al menu</a></p>
