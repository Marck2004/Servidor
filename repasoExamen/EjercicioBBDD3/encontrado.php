<link rel="stylesheet" href="style.css">
<?php

    session_start();

    print "<a href='index.php'>Pagina principal</a>";

    if(isset($_REQUEST['enviar'])){
        if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
            header("location:index.php");
        }else{

            $conexion = mysqli_connect("localhost","root","","repaso");

            $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
            $apellido = htmlspecialchars(trim(strip_tags($_REQUEST['apellido'])),ENT_QUOTES,'utf-8');

            $select = mysqli_query($conexion,"select * from usuario where Nombre='".$nombre."' or Apellidos='".$apellido."'");

    print "<table style='border:2px solid black;'>";
    print "<th style='border:2px solid black;'><b>Nombre</b></th>";
    print "<th style='border:2px solid black;'><b>Apellidos</b></th>";
            while($columna = mysqli_fetch_array($select)){
                    print "<tr style='border:2px solid black;'>";
            print "<td style='border:2px solid black;'>".$columna['Nombre']."</td>";
            print "<td style='border:2px solid black;'>".$columna['Apellidos']."</td>";
                     print "</tr>";
                }
        
    print "</table>";

        }
    }