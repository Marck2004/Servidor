<?php

    function conectarServidor(){
        try{
        $conn = new PDO("mysql:host=localhost;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        return $conn;
        }catch(PDOException $e){
            $e->getMessage();
        }
    }
    function conectarBBDD($dbname){
        try{
            $conn = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
            }catch(PDOException $e){
                $e->getMessage();
            } 
    }
    function sanear($nombre){
        return htmlspecialchars(trim(strip_tags($_REQUEST[$nombre])),ENT_QUOTES,'utf-8');
    }
    function manejarError($error){
        $fich = "errores.txt";
        $dir = "errores/";
        if(!is_dir($dir)){
            mkdir($dir);
        }
        $mensaje = date("Y-m-d H-m-i"). " - ". $error. PHP_EOL;
        error_log($mensaje,3,$dir.$fich);
    }
    function manejarSesion(){
        session_start();
        if(empty($_SESSION["usuario"])){
            header("location:login.php?error=1");
        }
    }
?>