<?php

    include("funciones.php");

    session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

            $conexion = conectarBBDD("Agenda");

            $select = "select * from personas";

            $ejecutarSelect = $conexion ->query($select);

            if($ejecutarSelect->rowCount() > 0){
                ?>
            <form action="borrar.php" method="post">
                <?php
                print "<table style='border:2px solid black'>";
                    foreach ($ejecutarSelect as $resultado) {
                        print "<tr style='border:2px solid black'>";
                        print "<td style='border:2px solid black'><input type='checkbox' name='borrados[]' value='$resultado[id]'></td>";
                        print "<td style='border:2px solid black'>$resultado[id]</td>";
                        print "<td style='border:2px solid black'>$resultado[Nombre]</td>";
                        print "<td style='border:2px solid black'>$resultado[Apellido]</td>";
                        print "<td style='border:2px solid black'>$resultado[Direccion]</td>";
                        print "<td style='border:2px solid black'>$resultado[Tlf]</td>";
                        print "</tr>";
                    }
                    print "</table>";

                    ?>
                    <input type="submit" value="Borrar" name="enviar"><input type="reset" value="Cancelar">
            </form>
                    <?php
            }else{
                header("location:validar.php");
            }

        }else{
            header("location:index.php?error=1");
        }

?>