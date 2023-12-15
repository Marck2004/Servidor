<?php
    include("funciones.php");
    session_start();

    if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

        if(empty($_REQUEST["nombre"]) &&
        empty($_REQUEST["apellido"]) &&
        empty($_REQUEST["direccion"]) &&
        empty($_REQUEST["tlf"])){

            if(empty($_REQUEST["nombre"])){
                $errorNombre = 'errorNombre=1&';
            }
            if(empty($_REQUEST["apellido"])){
                $errorApellido = 'errorApellido=1&';
            }
            if(empty($_REQUEST["direccion"])){
                $errorDireccion = 'errorDireccion=1&';
            }
            if(empty($_REQUEST["tlf"])){
                $errorTlf = 'errorTlf = 1';
            }

            header("location:formInsertar.php?".$errorNombre.$errorApellido.$errorDireccion.$errorTlf);
        }else{

        $nombre = sanear('nombre');
        $apellido = sanear('apellido');
        $direccion = sanear('direccion');
        $tlf = sanear('tlf');

        $conexion = conectarBBDD("Agenda");

        $select = "select * from personas";
        $resultadoSelect = $conexion->query($select);

        $comprobarExistencia = "select * from personas where Tlf = ?";

        $selectComprobarExistencia = $conexion->prepare($comprobarExistencia);

        $selectComprobarExistencia->execute([$tlf]);

            if($selectComprobarExistencia->rowCount() != 1){

            
        if($resultadoSelect ->rowCount() < 10 ){


        $consulta = "insert into personas(Nombre,Apellido,Direccion,Tlf)
            values (?,?,?,?)";
            
            try{
                
                $resultado = $conexion -> prepare($consulta);

                $resultado ->execute([$nombre,$apellido,$direccion,$tlf]);

                echo "<br>El registro : <br>
                    Nombre: $nombre, <br>
                    Apellido: $apellido, <br>
                    Direccion: $direccion, <br>
                    Telefono: $tlf, <br>
                    <b>Se ha creado con exito</b>";

                    print "<a href='links.php'>Volver al formulario</a>";

            }catch(PDOException $e){
                print "<p>Error al insertar en la bbdd ".$e->getMessage()."</p>";
            }
        }else{
            header("location:formInsertar.php?max=1");
        }
        }else{
            header("location:formInsertar.php?encontrado=1");
        }
        
        }
    }
?>