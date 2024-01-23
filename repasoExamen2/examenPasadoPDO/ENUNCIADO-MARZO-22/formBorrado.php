<style>
    table,th,tr,td{
        border:2px solid black;
    }
    .foto{
        width:50px;
        heigth:50px;
    }
</style>
<?php

    session_start();
    include("funciones.php");

    if(isset($_SESSION["usuario"])){
        $conexion = conectarBBD("marzo");
        $select = "select * from viviendas";

        $ejecutarSelect = $conexion->query($select);

        print "<table>";
        echo "<th>Tipo</th>
        <th>Zona</th>
        <th>Dormitorios</th>
        <th>Precio</th>
        <th>Tamaño</th>
        <th>Extras</th>
        <th>Foto</th>
        <th>Borrar</th>";

        ?>
            <form action="borrar.php" method="post">
        <?php
        foreach ($ejecutarSelect as $registro) {
            echo "<tr>
            <td>".$registro['tipo']."</td>
            <td>".$registro['zona']."</td>
            <td>".$registro['dormitorios']."</td>
            <td>".$registro['precio']."</td>
            <td>".$registro['tamaño']."</td>
            <td>".$registro['extras']."</td>
            <td>".$registro['foto']."</td>
            <td><input type='checkbox' name='borrados[]' value='$registro[id]'></td>
            </tr>";
        }
        print "</table>";
    
        ?>
        <input type="submit" value="borrar" name="borrar">
    </form>
    <p><a href="links.php">Volver al formulario</a></p>
        <?php
    }else{
        header("location:index.php?error=1");
    }

?>