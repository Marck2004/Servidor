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
    manejarSesion();

    $conn=conectarBBDD("marzo3");

    $stmt=$conn->query("select * from viviendas");

?>
<form action="borrar.php" method="post">
    <table>
        <th>Tipo</th>
        <th>Zona</th>
        <th>Direccion</th>
        <th>Dormitorios</th>
        <th>Precio</th>
        <th>Tamaño</th>
        <th>Extras</th>
        <th>Foto</th>
        <th>Borrar</th>
    <?php
        foreach ($stmt as $valores) {
            echo "<tr>
                <td>$valores[tipo]</td>
                <td>$valores[zona]</td>
                <td>$valores[direccion]</td>
                <td>$valores[dormitorios]</td>
                <td>$valores[precio]</td>
                <td>$valores[tamaño]</td>
                <td>$valores[extras]</td>
                <td><img src='imagenes/$valores[foto]'></td>
                <td><input type='checkbox' name='borrados[]' value='$valores[id]'</td>
            </tr>";
        }
    ?>
</table>
<input type="submit" value="Borrar" name="enviar">
</form>
<?php
        if(isset($_GET["ninguno"]) && $_GET["ninguno"] == 1){
            manejarError("No ha seleccionado ningun elemento en la operacion de borrado");
            print "<p style='color:red;'>No ha seleccionado ningun registro</p>";
        }
?>
<p><a href="links.php">Volver al formulario</a></p>