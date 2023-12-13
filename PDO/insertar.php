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

        $consulta = "insert into personas(Nombre,Apellido,Direccion,Tlf)
            values (?,?,?,?)";
            $select = "select * from personas";
            try{

                $resultado = $conexion -> prepare($consulta);

                $resultado ->execute([$nombre,$apellido,$direccion,$tlf]);

                $conexion->query($select);

                foreach ($resultado as $registro) {

                    print "registro: ".$registro["Nombre"].$registro["Apellido"].$registro["Direccion"].$registro["Tlf"];
                }

            }catch(PDOException $e){
                print "<p>Error al insertar en la bbdd ".$e->getMessage()."</p>";
            }
        }
        }
?>