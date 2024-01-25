<?php
    include("funciones.php");
    if(isset($_POST["enviar"])){

        $nombre = sanear("nombre");
        $clave = sanear("clave");
        $conn = conectarBBDD("Matricula2");
        
        try{
        $stmt = $conn->prepare("select * from usuarios where nombre = ? and clave = ?");

        $stmt->execute([$nombre,$clave]);
        if($stmt->rowCount() > 0){
            session_start();
            $_SESSION["usuario"] = $nombre;
            header("location:links.php"); 
        }else{
            header("location:login.php?error=1"); 
        }
    }catch(PDOException $e){
        print $e->getMessage();
    }
    }else{
        header("location:login.php?error=1");
    }

?>