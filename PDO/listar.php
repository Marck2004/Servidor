<?php
    include("funciones.php");
    session_start();
    print $_SESSION['usuario'];
    print $_SESSION['clave'];
        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

            $conexion = conectarBBDD('Agenda');

            $select = "select * from personas";

            $ejecutarSelect = $conexion ->query($select);

                if($ejecutarSelect->rowCount() > 0){

                    print "<table style='border:2px solid black'>";
                    foreach ($ejecutarSelect as $resultado) {
                        print "<tr style='border:2px solid black'>";
                        print "<td style='border:2px solid black'>$resultado[id]</td>";
                        print "<td style='border:2px solid black'>$resultado[Nombre]</td>";
                        print "<td style='border:2px solid black'>$resultado[Apellido]</td>";
                        print "<td style='border:2px solid black'>$resultado[Direccion]</td>";
                        print "<td style='border:2px solid black'>$resultado[Tlf]</td>";
                        print "</tr>";
                    }
                    print "</table>";
                    ?>
                    <a href="links.php">Volver al formulario</a>
                    <?php
                }else{

                }

        }else{
            header("location:index.php?error=1");
        }

?>