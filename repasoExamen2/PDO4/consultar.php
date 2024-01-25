<style>
    table,th,tr,td{
        border:2px solid black;
    }
</style>
<?php

    session_start();
    include("funciones.php");
    if(isset($_SESSION["usuario"])){

        $nombre = sanear("nombre");
        $apellido = sanear("apellido");
        $conn = conectarBBDD("Matricula2");

        if(empty($nombre) && empty($apellido)){
            $stmt = $conn->query("select * from matriculas");
            listar($stmt);

        }else{

            $stmt = $conn->prepare("select * from matriculas where nombre like ? and apellido like ?");
            $stmt->execute([$nombre.'%',$apellido.'%']);
            listar($stmt);
            
        }

        print "<p><a href='links.php'>Volver al formulario</a></p>";
    }
        ?>