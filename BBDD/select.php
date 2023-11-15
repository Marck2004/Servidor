<?php
    $conexion = mysqli_connect("localhost","root","","datos_empleados");

    session_start();

    if(isset($_SESSION['usuario'])){

if(isset($_GET['consultar']) && $_GET['consultar'] == 1){
            
$resultado = mysqli_query($conexion,"select * from empleados");
                print "<table style='border:2px solid black'>";
                while ($columna = mysqli_fetch_array($resultado)){
        echo "<tr style='border:2px solid black'>";
        echo "<td style='border:2px solid black'>" . $columna['codigo'] . "</td>". "<td style='border:2px solid black'>".$columna['nombre']."</td>".
        "<td style='border:2px solid black'>" . $columna['lugar_nacimiento'] . "</td>"."<td style='border:2px solid black'>" . $columna['fecha_nacimiento'] . "</td>"
        ."<td style='border:2px solid black'>" . $columna['direccion'] . "</td>"."<td style='border:2px solid black'>" . $columna['telefono'] . "</td>"
        ."<td style='border:2px solid black'>" . $columna['puesto']."</td>";
        echo "</tr>";
        
        }
        print "</table>";
        
    }else if(isset($_REQUEST['enviar'])){

        foreach ($_REQUEST['eliminar'] as $Indice => $valor) {
            mysqli_query($conexion,"delete from empleados where codigo = ".$valor);
        }
        

    $resultado = mysqli_query($conexion,"select * from empleados");
    print "<table style='border:2px solid black'>";
    while ($columna = mysqli_fetch_array($resultado)){
    echo "<tr style='border:2px solid black'>";
    echo "<td style='border:2px solid black'>" . $columna['codigo'] . "</td>". "<td style='border:2px solid black'>".$columna['nombre']."</td>".
    "<td style='border:2px solid black'>" . $columna['lugar_nacimiento'] . "</td>"."<td style='border:2px solid black'>" . $columna['fecha_nacimiento'] . "</td>"
    ."<td style='border:2px solid black'>" . $columna['direccion'] . "</td>"."<td style='border:2px solid black'>" . $columna['telefono'] . "</td>"
    ."<td style='border:2px solid black'>" . $columna['puesto']."</td>";
    echo "</tr>";
    }
    print "</table>";
    }

    print "<br><a href='validar.php'>Volver a inicio</a>";
}else{
    header('location:Ejercicio1.php?error=1');
}
?>