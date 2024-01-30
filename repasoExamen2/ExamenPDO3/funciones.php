<?php

    function conectarServidor(){
        try{
        $conn = new PDO("mysql:host=localhost;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conn;
    }catch(PDOException $e){
        print $e->getMessage();
    }
    }

    function conectarBBDD($dbname){
        try{
        $conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conn;
    }catch(PDOException $e){
        print $e->getMessage();
    }
    }
    function sanear($nombre){
        return htmlspecialchars(trim(strip_tags($_REQUEST[$nombre])),ENT_QUOTES,'utf-8');
    }
    function manejarSesion(){
        session_start();
        if(empty($_SESSION["usuario"])){
            header("location:login.php?error=1");
        }
    }
    function manejarError($mensaje){
        $directorio = "errores/";
        $fichero = "errores.txt";
        if(!is_dir($directorio)){
            mkdir($directorio);
        }
        $texto = date("Y-m-d  H:i:s"). " - ". $mensaje.PHP_EOL;
        error_log($texto,3,$directorio.$fichero);
    }
?>