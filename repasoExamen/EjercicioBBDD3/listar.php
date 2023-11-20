<link rel="stylesheet" href="style.css">

<?php

    session_start();
    print "<a href='index.php'>Pagina inicial</a>";
        if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
            header("location:index.php");
        }else{

            $conexion = mysqli_connect("localhost","root","","repaso");

                $select = mysqli_query($conexion,"select * from usuario");
                
                $arr = [];

            
                while($columna = mysqli_fetch_array($select)){
                    array_push($arr,array($columna['id'],$columna['Nombre'],$columna['Apellidos']));
                }
                function compararNombres($a,$b){
                    return strcmp($a[1],$b[1]);
                }
            usort($arr,'compararNombres');

    print "<table style='border:2px solid black;'>";
    print "<th style='border:2px solid black;'><b>id</b></th>";
    print "<th style='border:2px solid black;'><b>Nombre</b></th>";
    print "<th style='border:2px solid black;'><b>Apellidos</b></th>";
                foreach ($arr as $key => $value) {
                    print "<tr style='border:2px solid black;'>";
            print "<td style='border:2px solid black;'>".$value[0]."</td>";
            print "<td style='border:2px solid black;'>".$value[1]."</td>";
            print "<td style='border:2px solid black;'>".$value[2]."</td>";
        print "</tr>";
                }
        
    print "</table>";
        }

        
?>