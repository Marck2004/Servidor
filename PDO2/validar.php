<?php
include("funciones.php");
session_start();
    if(isset($_POST["enviar"]) || $_SESSION["usuario"]){

        $nombre = sanear("nombre");
        $clave = sanear("clave");

        $query = "select * from usuarios where Nombre = ? and clave = ?";

        $conexion = conectarBBDD("Matricula");

        $execQuery = $conexion->prepare($query);

        $execQuery->execute([$nombre,$clave]);

        if($execQuery->rowCount() == 1){
           
            $_SESSION["usuario"] = $nombre;
            
            header("location:links.php");
        }else{
            manejarError("No existe ese usuario");
            header("location:index.php?error=1");
        }
    
}else{
    manejarError("No existe la sesion");
    header("location:index.php?sesion=1");
}

?>