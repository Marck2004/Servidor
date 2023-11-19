<?php

    if(isset($_REQUEST['enviar'])){
        session_start();

        if($_SESSION['usuario'] == 0 || $_SESSION['clave'] == 0){
            header('location:index.php?user=1&clave=1');
        }else{

        $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
        $lugarNacimiento = htmlspecialchars(trim(strip_tags($_REQUEST['lugarNac'])),ENT_QUOTES,'utf-8');
        $fechaNacimiento = htmlspecialchars(trim(strip_tags($_REQUEST['fechaNac'])),ENT_QUOTES,'utf-8');
        $direccion = htmlspecialchars(trim(strip_tags($_REQUEST['direccion'])),ENT_QUOTES,'utf-8');
        $tlf = htmlspecialchars(trim(strip_tags($_REQUEST['telefono'])),ENT_QUOTES,'utf-8');
        $puesto = htmlspecialchars(trim(strip_tags($_REQUEST['puesto'])),ENT_QUOTES,'utf-8');
        $estado = htmlspecialchars(trim(strip_tags($_REQUEST['estado'])),ENT_QUOTES,'utf-8');


            if(empty($_REQUEST['nombre']) ||
            empty($_REQUEST['lugarNac']) ||
            empty($_REQUEST['fechaNac']) ||
            empty($_REQUEST['direccion']) ||
            empty($_REQUEST['telefono']) ||
            empty($_REQUEST['puesto']) ||
            empty($_REQUEST['estado'])){

                if(empty($_REQUEST['nombre'])){
                    $errornom = 'nom=1&';
                }
                if(empty($_REQUEST['lugarNac'])){
                    $errorlug = 'lug=1&';
                }
                if(empty($_REQUEST['fechaNac'])){
                    $errorfec = 'fec=1&';
                }
                if(empty($_REQUEST['direccion'])){
                    $errordir = 'dir=1&';
                }
                if(empty($_REQUEST['telefono'])){
                    $errortlf = 'tlf=1&';
                }
                if(empty($_REQUEST['puesto'])){
                    $errorpue = 'pue=1&';
                }
                if(($_REQUEST['estado']) == '-----'){
                    $errorest = 'est=1';
                }
                header('location:agregarDatos.php?'.$errornom.$errorlug.
                    $errorfec.$errordir.$errortlf.$errorpue.$errorest);
            }else{

                $conexion = mysqli_connect("localhost","root","","datos_empleados");

                mysqli_query($conexion,"insert into empleados (nombres,lugar_nacimiento,
                fecha_nacimiento,direccion,telefono,puesto)
                values ('$nombre','$lugarNacimiento','$fechaNacimiento','$direccion','$tlf','$puesto')")
                 or die("NO SE HA PODIDO INSERTAR");
            
                header('location:mostrarEmpleados.php');
            }
            }

        }
    

?>