
<?php
    include("funciones.php");
    session_start();
        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){
            
            $conexion = conectarBBDD('Agenda');

            if(isset($_GET['ascNombre']) && $_GET['ascNombre'] == 1){
              
                $select = "select * from personas order by Nombre asc";

            }else if(isset($_GET['descNombre']) && $_GET['descNombre'] == 1){

                $select = "select * from personas order by Nombre desc";
            
            }else if(isset($_GET['ascAppellido']) && $_GET['ascAppellido'] == 1){

                $select = "select * from personas order by Apellido asc";

            }else if(isset($_GET['descApellido']) && $_GET['descApellido'] == 1){

                $select = "select * from personas order by Apellido desc";

            }else{
                $select = "select * from personas order by Apellido asc";
            }

            $ejecutarSelect = $conexion ->query($select);

                if($ejecutarSelect->rowCount() > 0){

                    print "<table style='border:2px solid black'>";
                    print "<th style='border:2px solid black'>
                    <b>
                    <a href='listar.php?ascNombre=1'>
                    <img src='img/flecha-hacia-arriba.png' style='heigth:15px;width:15px;'></a>NOMBRE
                    <a href='listar.php?descNombre=1'>
                    <img src='img/flecha-hacia-abajo.png' style='heigth:15px;width:15px;'></a>
                    </b>
                    <a href='listar.php?ascNombre=1'>
                    </th>
                    <th style='border:2px solid black'>
                    <b>
                    <a href='listar.php?ascApellido=1'>
                    <img src='img/flecha-hacia-arriba.png' style='heigth:15px;width:15px;'></a>APELLIDO
                    <a href='listar.php?descApellido=1'>
                    <img src='img/flecha-hacia-abajo.png' style='heigth:15px;width:15px;'></a>
                    </b>
                    </th>
                    <th style='border:2px solid black'><b>DIRECCION</b></th>
                    <th style='border:2px solid black'><b>TELEFONO</b></th>";
                    foreach ($ejecutarSelect as $resultado) {
                        print "<tr style='border:2px solid black'>";
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
                    print "<a href='links.php'>Volver al formulario</a><br>";
                    print "<b>No hay ningun registro</b>";
                }
            
        }else{
            header("location:index.php?error=1");
        }

?>