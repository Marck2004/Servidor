<?php

    session_start();

    if(isset($_SESSION['usuario'])){

        if(is_dir("archivosEnviados")){
            $manejador = opendir("archivosEnviados");

            while($archivo = readdir($manejador)){
                if($archivo != "." && $archivo != ".."){
                    echo "[ ".$archivo." ]<br>";
                }
            }
            print "<p><a href='links.php'>Volver al formulario</a></p>";
        }else{
            manejarError("No existe el directorio");
            header("location:links.php?existencia=1");
        }

    }else{
        manejarError("No existe la sesion");
        header("location:index.php?sesion=1");
    }

?>