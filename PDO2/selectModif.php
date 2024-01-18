<?php
include("funciones.php");
    session_start();
    if(isset($_SESSION["usuario"])){
        $conexion = conectarBBDD("Matricula");

        $select = $conexion->query("select * from matriculas");

        print "<table style='border:2px solid black'>";
        echo "<th style='border:2px solid black'>MODIFICAR</th>
        <th style='border:2px solid black'>DNI</th>
        <th style='border:2px solid black'>Nombre</th>
        <th style='border:2px solid black'>Apellidos</th>
        <th style='border:2px solid black'>Direccion</th>
        <th style='border:2px solid black'>Telefono</th>
        <th style='border:2px solid black'>Foto</th>";

        ?>
            <form action="formModif.php" method="post">
        <?php
        foreach ($select as $valor) {
            echo "<tr style='border:2px solid black'>
            <td style='border:2px solid black'><input type='radio' name='modificado' value='$valor[dni]'></td>
            <td style='border:2px solid black'>$valor[dni]<input type='hidden' name='dni' value='$valor[dni]'></td>
            <td style='border:2px solid black'>$valor[nombre]<input type='hidden' name='nombre' value='$valor[nombre]'></td>
            <td style='border:2px solid black'>$valor[apellidos]<input type='hidden' name='apellidos' value='$valor[apellidos]'></td>
            <td style='border:2px solid black'>$valor[direccion]<input type='hidden' name='direccion' value='$valor[direccion]'></td>
            <td style='border:2px solid black'>$valor[telefono]<input type='hidden' name='telefono' value='$valor[telefono]'></td>
            <td style='border:2px solid black'><img src='archivosEnviados/$valor[foto]' style='width:75px;'><input type='hidden' name='foto'></td>
            </tr>";
        }
        
        
        print "</table>";
        ?>
        <input type="submit" value="Modificar" name="enviar"><input type="reset" value="Cancelar" name="cancelar">
            </form>
        <?php
        print "<p><a href='links.php'>Volver al formulario</a></p>";
    }else{
        manejarError("No existe la sesion");
        header("location:index.php?sesion=1");
    }

?>