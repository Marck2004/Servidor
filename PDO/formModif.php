<?php

    include("funciones.php");

    session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

            print "<a href='links.php'>Volver al formulario</a><br>";
            $conexion = conectarBBDD("Agenda");

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

            $describe = "show columns from personas";
            $ejecutarDescribe = $conexion->query($describe);
            $columnas = $ejecutarDescribe->fetchAll(PDO::FETCH_ASSOC);

            $ejecutarSelect = $conexion ->query($select);

            if($ejecutarSelect->rowCount() > 0){
                ?>
            <form action="modificar.php" method="post">
                <?php
                print "<table style='border:2px solid black'>";
                print "<th style='border:2px solid black'><b>MODIFICAR</b></th>
                <th style='border:2px solid black'>
                    <b>
                    <a href='formBorrar.php?ascNombre=1'>
                    <img src='img/flecha-hacia-arriba.png' style='heigth:15px;width:15px;'></a>NOMBRE
                    <a href='formBorrar.php?descNombre=1'>
                    <img src='img/flecha-hacia-abajo.png' style='heigth:15px;width:15px;'></a>
                    </b>
                    <a href='formBorrar.php?ascNombre=1'>
                    </th>
                    <th style='border:2px solid black'>
                    <b>
                    <a href='formBorrar.php?ascApellido=1'>
                    <img src='img/flecha-hacia-arriba.png' style='heigth:15px;width:15px;'></a>APELLIDO
                    <a href='formBorrar.php?descApellido=1'>
                    <img src='img/flecha-hacia-abajo.png' style='heigth:15px;width:15px;'></a>
                    </b>
                    </th>
                    <th style='border:2px solid black'><b>DIRECCION</b></th>
                    <th style='border:2px solid black'><b>TELEFONO</b></th>";

                    foreach ($ejecutarSelect as $resultado) {
                        print "<tr style='border:2px solid black'>";
                        print "<td style='border:2px solid black'><input type='radio' name='modificado' value='$resultado[id]'></td>";
                        foreach ($columnas as $columna) {
                        
                        print "<td style='border:2px solid black'>".$resultado[$columna['Field']]."</td>";
                        }
                        print "</tr>";
                    }

                    print "</table>";
                    if(isset($_GET['seleccion']) && $_GET['seleccion'] == 1){
                        print "<p style='color:red;'>Debe seleccionar un boton</p>";
                    }
                    ?>
                    <input type="submit" value="Modificar" name="enviar"><input type="reset" value="Cancelar">
            </form>
                    <?php

            }else{
                    print "<b>No hay ningun registro</b>";
            }

        }else{
            header("location:index.php?error=1");
        }

?>