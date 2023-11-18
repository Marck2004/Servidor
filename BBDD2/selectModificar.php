<?php

session_start();

    

    

    if(!isset($_SESSION['resultado'])){
        header('location:bbddInexistente.php');
    }else{
        print "<a href='index.php'>Pagina principal</a>";

        print "<p>Indique el registro que quiere modificar</p>";
        $conexion = mysqli_connect("localhost","root","","listados");

        
            $select = mysqli_query($conexion,"select * from alumno ");

            print "<table style='border:2px solid black;'>
            <th style='border:2px solid black;'>Modificar</th>
            <th style='border:2px solid black;'>Nombre</th>
            <th style='border:2px solid black;'>Apellidos</th>";

            ?> <form action="modificar.php" method="post"><?php
            while($columna = mysqli_fetch_array($select)){
                print "<tr style='border:2px solid black;'>";
                    print "<td style='border:2px solid black;'><input type='radio' name='modificar' value=".$columna['id']."</td>";
                    print "<td style='border:2px solid black;'>".$columna['nombre']."</td>";
                    print "<td style='border:2px solid black;'>".$columna['apellido']."</td>";
                    print "</tr>";
            }
            print "</table>";
    }

    ?><input type="submit" value="Modificar Registro" name="enviar"><input type="reset" value="Reiniciar formulario"></form>