<?php

    function sanear($campo){
        return htmlspecialchars(trim(strip_tags($_REQUEST[$campo])),ENT_QUOTES,'utf-8');
    }
    function conexionServidor(){
        try{
        $conexion = new PDO("mysql:host=localhost;charset=utf8","root","");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conexion;
    }catch(PDOException $e){
        print $e->getMessage();
    }
    }
    function conectarBBDD($bbdd){
        try{
            $conexion = new PDO("mysql:host=localhost;dbname=$bbdd;charset=utf8","root","");
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
    function manejarError($mensaje) {
        $archivoLog = 'errores.txt';
        
        // Formatear el mensaje con la fecha y hora actual
        $mensajeFormateado = date('Y-m-d H:i:s') . ' - ' . $mensaje . PHP_EOL;
    
        // Escribir el mensaje de error en el archivo de registro
        error_log($mensajeFormateado, 3, $archivoLog);
    }

?>