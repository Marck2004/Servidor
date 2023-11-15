
    <?php

        $conexion = mysqli_connect("localhost","root","","datos_empleados");

        $codigo = htmlspecialchars(trim(strip_tags($_REQUEST['codigo'])),ENT_QUOTES,'utf-8');
        $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
        $lugarNacimiento = htmlspecialchars(trim(strip_tags($_REQUEST['lugarNacimiento'])),ENT_QUOTES,'utf-8');
        $fechaNacimiento = htmlspecialchars(trim(strip_tags($_REQUEST['fechaNacimiento'])),ENT_QUOTES,'utf-8');
        $direccion = htmlspecialchars(trim(strip_tags($_REQUEST['direccion'])),ENT_QUOTES,'utf-8');
        $tlf = htmlspecialchars(trim(strip_tags($_REQUEST['tlf'])),ENT_QUOTES,'utf-8');
        $puesto = htmlspecialchars(trim(strip_tags($_REQUEST['puesto'])),ENT_QUOTES,'utf-8');
        $estado = htmlspecialchars(trim(strip_tags($_REQUEST['estado'])),ENT_QUOTES,'utf-8');

    if(empty($codigo) || empty($nombre) || empty($lugarNacimiento) || empty($fechaNacimiento) || empty($direccion) ||
        empty($tlf) || empty($puesto) || empty($estado)){
            if(empty($codigo)){
                $errorCodigo = 'errorCodigo=1&';
            }
            if(empty($nombre)){
                $errorNombre = 'errorNombre=1&';
            }
            if(empty($lugarNacimiento)){
                $errorLugar = 'errorLugar=1&';
            }
            if(empty($fechaNacimiento)){
                $errorFecha = 'errorFecha=1&';
            }
            if(empty($direccion)){
                $errorDireccion = 'errorDireccion=1&';
            }
            if(empty($tlf)){
                $errorTlf = 'errorTlf=1&';
            }
            if(empty($puesto)){
                $errorPuesto = 'errorPuesto=1&';
            }
            if(empty($estado)){
                $errorEstado = 'errorEstado=1&';
            }
            header("location:añadir.php?".$errorCodigo.$errorNombre.$errorLugar.$errorFecha.$errorDireccion
                .$errorTlf.$errorPuesto.$errorEstado);
    }else{
        session_start();
        if(isset($_SESSION['usuario'])){
        if(isset($_GET['añadir']) && $_GET['añadir'] == 1){
             
            mysqli_query($conexion,"insert into empleados(codigo,nombre,lugar_nacimiento,fecha_nacimiento,direccion,telefono,puesto) 
                values ($codigo,'$nombre','$lugarNacimiento','$fechaNacimiento','$direccion','$tlf','$puesto')");

            header('location:select.php?consultar=1');
                
}
}else{
    header('location:Ejercicio1.php?error=1');
}
}

    ?>