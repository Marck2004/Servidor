<?php

    $conexion = mysqli_connect("localhost","root","","datos_empleados");

        $resultado = mysqli_query($conexion,"select * from empleados");
    ?>
    <form action="select.php" method='post'>;
    <?php
        print "<table style='border:2px solid black'>";
        while ($columna = mysqli_fetch_array($resultado)){
    echo "<tr style='border:2px solid black'>";
    echo "<td style='border:2px solid black'>" . $columna['codigo'] . "</td>". "<td style='border:2px solid black'>".$columna['nombre']."</td>".
    "<td style='border:2px solid black'>" . $columna['lugar_nacimiento'] . "</td>"."<td style='border:2px solid black'>" . $columna['fecha_nacimiento'] . "</td>"
    ."<td style='border:2px solid black'>" . $columna['direccion'] . "</td>"."<td style='border:2px solid black'>" . $columna['telefono'] . "</td>"
    ."<td style='border:2px solid black'>" . $columna['puesto']."</td>"."<td style='border:2px solid black;'><input type='checkbox' name='eliminar' value=".$columna['codigo']."></td>";
    echo "</tr>";
    }
    print "</table>";
    ?>
    <input type="submit" value="eliminar" name="enviar">
    </form>

   


