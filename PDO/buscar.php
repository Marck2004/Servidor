<?php
    include("funciones.php");
    session_start();


        if(isset($_SESSION['usuario']) && $_SESSION['clave']){
            print "<a href='links.php'>Volver al formulario</a>";

            if(isset($_REQUEST['enviar'])){
            $nombre = sanear("nombre");
            $apellido = sanear("apellidos");
                
            $_SESSION['nombreBuscar'] = $nombre;
            $_SESSION['apellidoBuscar'] = $apellido;
        }

            if(empty($_SESSION['nombreBuscar']) && empty($_SESSION['apellidoBuscar'])){

                header("location:listar.php");
            }else{
                
            $conexion = conectarBBDD("Agenda");

            try{
                
                if(isset($_GET['ascNombre']) && $_GET['ascNombre'] == 1){
                    $select = "select * from personas where Nombre like ? and Apellido like ? order by Nombre asc";
    
                }else if(isset($_GET['descNombre']) && $_GET['descNombre'] == 1){
    
                    $select = "select * from personas where Nombre like ? and Apellido like ? order by Nombre desc";
                
                }else if(isset($_GET['ascAppellido']) && $_GET['ascAppellido'] == 1){
    
                    $select = "select * from personas where Nombre like ? and Apellido like ? order by Apellido asc";
    
                }else if(isset($_GET['descApellido']) && $_GET['descApellido'] == 1){
    
                    $select = "select * from personas where Nombre like ? and Apellido like ? order by Apellido desc";
    
                }else{

                    $select = "select * from personas where Nombre like ? and Apellido like ? ";
                }

                $resultadoSelelect = $conexion -> prepare($select);

                $resultadoSelelect ->execute([$_SESSION['nombreBuscar'] .'%',$_SESSION['apellidoBuscar'] .'%']);

                $describe = "show columns from personas";
                $resultadoDescribe = $conexion->query($describe);
                $columnas = $resultadoDescribe->fetchAll(PDO::FETCH_ASSOC);

                print "<table style='border:2px solid black'>";
                foreach ($columnas as $columna) {
                    if($columna["Field"] == "Nombre"){
                    print "<th style='border:2px solid black'>
                    <b>
                    <a href='buscar.php?ascNombre=1'>
                    <img src='img/flecha-hacia-arriba.png' style='heigth:15px;width:15px;'></a>NOMBRE
                    <a href='buscar.php?descNombre=1'>
                    <img src='img/flecha-hacia-abajo.png' style='heigth:15px;width:15px;'></a>
                    </b>
                    <a href='buscar.php?ascNombre=1'>
                    </th>";
                    }else if($columna["Field"] == "Apellido"){
                        print "<th style='border:2px solid black'>
                    <b>
                    <a href='buscar.php?ascApellido=1'>
                    <img src='img/flecha-hacia-arriba.png' style='heigth:15px;width:15px;'></a>APELLIDO
                    <a href='buscar.php?descApellido=1'>
                    <img src='img/flecha-hacia-abajo.png' style='heigth:15px;width:15px;'></a>
                    </b>
                    </th>";
                    }else if($columna['Field'] != "id"){
                        print "<th style='border:2px solid black'><b>".$columna["Field"]."</b></th>";
                    }
                }

                foreach ($resultadoSelelect as $resultado) {
                    print "<tr style='border:2px solid black'>";
                    foreach ($columnas as $columna) {
                        if($columna['Field'] != "id"){
                            print "<td style='border:2px solid black'>".$resultado[$columna['Field']]."</td>";
                        }
                        
                    }
                        print "</tr>";
                }
                print "</table>";

            }catch(PDOException $e){
                print "<p>Error al conectarse ".$e->getMessage()."</p>";
            }
            }
        }else{
            header("location:index.php?error=1");
        }
    

?>