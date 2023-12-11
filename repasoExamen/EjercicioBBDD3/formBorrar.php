<link rel="stylesheet" href="style.css">
<?php

    session_start();

    print "<a href='index.php'>Pagina principal</a>";

        if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
            header("location:index.php");
        }else{

            $conexion = mysqli_connect("localhost","root","","repaso");

            $select = mysqli_query($conexion,"select * from usuario");

            print "<table style='border:2px solid black;'><th style='border:2px solid black;'>Borrar</th><th style='border:2px solid black;'>Nombre</th><th style='border:2px solid black;'>Apellidos</th>";
               ?>
               <form action="eliminar.php" method="post">
               <?php
                while($columna = mysqli_fetch_array($select)){

                    print "<tr style='border:2px solid black;'>";
                    print "<td style='border:2px solid black;'><input type='radio' name='eliminar' value=".$columna['id']."</td>";
                    print "<td style='border:2px solid black;'>".$columna['Nombre']."</td>";
                    print "<td style='border:2px solid black;'>".$columna['Apellidos']."</td>";
                    print "</tr>";
                    
                }
               
                        print "</table>";

                        ?>
                        <input type="submit" value="Borrar registro" name="enviar">
                        <input type="reset" value="Reiniciar formulario" name="cancelar">
                            </form>
                        <?php
                }
                
        
?>