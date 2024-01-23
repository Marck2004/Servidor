<?php

    function conectarServidor(){
        try{
            $conexion = new PDO("mysql:host=localhost;charset=utf8","root","");
            //$conexion->setAttribute(PDO::ATTR_MODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
    function conectarBBD($nombre){
        try{
            $conexion = new PDO("mysql:host=localhost;dbname=$nombre;charset=utf8","root","");
            //$conexion->setAttribute(PDO::ATTR_MODE,PDO::ERRMODE_EXCEPTION);
            return $conexion;
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }
    function sanear($nombre){
        return htmlspecialchars(trim(strip_tags($_REQUEST[$nombre])),ENT_QUOTES,'utf-8');
    }
    function manejarError($error){

        $nombreDirectorio = "errores";
        if(!is_dir($nombreDirectorio)){
            mkdir($nombreDirectorio);
        }

        $archivoLog = "errores.txt";

        $mensajeFormateado = date('Y-m-d H:i:s'). ' - '. $error.PHP_EOL;

        error_log($mensajeFormateado,3,$nombreDirectorio."/".$archivoLog);
    }

?>