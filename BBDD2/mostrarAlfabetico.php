<?php
    
    session_start();

        if(!isset($_SESSION['resultado'])){
            header('location:bbddInexistente.php');
        }else{
            print "<a href='index.php'>Volver a inicio</a> <br>";
            $conexion = mysqli_connect("localhost","root","","listados");

            $select = mysqli_query($conexion,"select * from alumno");
            $arr = [];
            
                while($columna = mysqli_fetch_array($select)){
                  
                    array_push($arr,array($columna['nombre'],$columna['apellido']));
                    
                }
                sort($arr);

                print "<table style='border:2px solid black;'><th style='border:2px solid black;'>Nombre</th><th style='border:2px solid black;'>Apellidos</th>";
                foreach ($arr as $valor) {

                        print "<tr style='border:2px solid black;'>
                        <td style='border:2px solid black;'>".$valor[0]."</td>
                        <td style='border:2px solid black;'>".$valor[1]."</td>
                        </tr>";
                    
                    
                }
                print "</table>";
        }

?>