<?php

    function sanear($param){
        return htmlspecialchars(trim(strip_tags($_REQUEST[$param])),ENT_QUOTES,'utf-8');
    }
    function conectarBBDD($nombre){
        try{
        $conexion = new PDO("mysql:host=localhost;dbname=$nombre;charset=utf8","root","");

        $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $conexion;
    }catch(PDOException $e){
        print "<p>Error al conectar con la bbdd ".$e->getMessage()."</p>";
    }
    }
    function conectarServidor(){
        try{
            $conexion = new PDO("mysql:host=localhost;charset=utf8","root","");
    
            $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
            return $conexion;
        }catch(PDOException $e){
            print "<p>Error al conectar con la bbdd ".$e->getMessage()."</p>";
        }
    }
    
?>