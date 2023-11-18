<?php
    session_start();

        if(!isset($_SESSION['resultado'])){
            header('location:bbddInexistente.php');
        }else{
            print "<a href='index.php'>Pagina principal</a>";
            $conexion = mysqli_connect("localhost","root","","listados");

            
                $select = mysqli_query($conexion,"select * from alumno where 
                nombre = '".$_REQUEST['nombre']. "' or apellido = '".$_REQUEST['apellidos']."'");

                print "<table style='border:2px solid black;'>";
                while($columna = mysqli_fetch_array($select)){
                    print "<tr style='border:2px solid black;'>";
                        print "<td style='border:2px solid black;'>".$columna['nombre']."</td>";
                        print "<td style='border:2px solid black;'>".$columna['apellido']."</td>";
                        print "</tr>";
                }
                print "</table>";
        }
?>