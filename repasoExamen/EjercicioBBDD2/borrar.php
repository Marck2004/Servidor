<?php

    session_start();

        if($_SESSION['usuario'] == 0 || $_SESSION['clave'] == 0){
            header('location:index.php?usuario=1&clave=1');
        }else{

            $conexion = mysqli_connect("localhost","root","","datos_empleados");

                $select = mysqli_query($conexion,"select * from empleados");

        print "<table style='border:2px solid black'>";
            
            print "<th style='border:2px solid black'>Borrado</th>";
            print "<th style='border:2px solid black'>Codigo</th>";
            print "<th style='border:2px solid black'>Nombre</th>";
            print "<th style='border:2px solid black'>Lugar de Nacimiento</th>";
            print "<th style='border:2px solid black'>Fecha de Nacimiento</th>";
            print "<th style='border:2px solid black'>Telefono</th>";
            print "<th style='border:2px solid black'>Cargo</th>";
            print "<th style='border:2px solid black'>Estado</th>";

            ?>
        <form action="eliminar.php" method="post">
            <?php
                while ($columna = mysqli_fetch_array($select)) {
                    print "<tr style='border:2px solid black'>";
                    print "<td style='border:2px solid black'><input type='checkbox' name='borrar[]' value=".$columna['codigo']."></td>";
                    print "<td style='border:2px solid black'>".$columna['codigo']."</td>";
                    print "<td style='border:2px solid black'>".$columna['nombres']."</td>";
                    print "<td style='border:2px solid black'>".$columna['lugar_nacimiento']."</td>";
                    print "<td style='border:2px solid black'>".$columna['fecha_nacimiento']."</td>";
                    print "<td style='border:2px solid black'>".$columna['direccion']."</td>";
                    print "<td style='border:2px solid black'>".$columna['telefono']."</td>";
                    print "<td style='border:2px solid black'>".$columna['puesto']."</td>";
                    print "</tr>";
                }
            print "</table>";

        }

?>
<input type="submit" value="Eliminar" name="enviar">
<input type="reset" value="Cancelar">
</form>