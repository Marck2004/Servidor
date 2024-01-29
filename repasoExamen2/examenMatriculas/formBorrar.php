<style>
    table,th,tr,td{
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

    $conn = conectarBBDD("Matriculas3");

    $stmt= $conn->query("select * from matriculas");

    print "<table>";
    echo "<th>DNI</th>
    <th>NOMBRE</th>
    <th>APELLIDO</th>
    <th>DIRECCION</th>
    <th>TELEFONO</th>
    <th>FOTO</th>
    <th>BORRAR</th>";
    ?>
        <form action="borrar.php" method="post">
    <?php  
    foreach ($stmt as $campos) {
        echo "<tr>
            <td>$campos[dni]</td>
            <td>$campos[nombre]</td>
            <td>$campos[apellidos]</td>
            <td>$campos[direccion]</td>
            <td>$campos[telefono]</td>
            <td><img src='imagenes/$campos[foto]'></td>
            <td><input type='checkbox' name='borrados[]' value='$campos[dni]'></td>
        </tr>";
    }
    print "</table>";
?>
<input type="submit" value="Modificar" name="enviar">
</form>
<?php
    if(isset($_GET["minimo"]) && $_GET["minimo"] == 1){
        manejarError("Debe de haber un minimo de matriculas seleccionadas para borrar");
        print "<p style='color:red'>Debe de haber un minimo de matriculas seleccionadas para borrar</p>";
    }
?>
<p><a href="links.php">Volver al formulario</a></p>