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
    <th>MODIFICAR</th>";
    ?>
        <form action="formModif2.php" method="post">
    <?php  
    foreach ($stmt as $campos) {
        echo "<tr>
            <td>$campos[dni]</td>
            <td>$campos[nombre]</td>
            <td>$campos[apellidos]</td>
            <td>$campos[direccion]</td>
            <td>$campos[telefono]</td>
            <td><img src='imagenes/$campos[foto]'></td>
            <td><input type='radio' name='modificar' value='$campos[dni]'></td>
        </tr>";
    }
    print "</table>";
?>
<input type="submit" value="Modificar" name="enviar">
</form>
<p><a href="links.php">Volver al formulario</a></p>