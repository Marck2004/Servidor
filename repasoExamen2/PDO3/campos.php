<style>
    .error{
        color:red;
    }
</style>
<?php

    include("funciones.php");
    comprobarSesion();
    $nombre = sanear("nombre");
    $tipo = sanear("tipo");

    print "<p><a href='links.php'>Volver al menu</a></p>";
    if(empty($nombre) || empty($tipo)){
        print "<p class='error'>Se deben rellenar los dos campos</p>";
    }else{
        try{
        $conn = conectarBBDD("Matricula2");

        $stmt = $conn->query("alter table matriculas add $nombre $tipo");

        print "<p><b>Se ha añadido la columna</b></p>";
        }catch(PDOException $e){
            print $e->getMessage();
        }
    }

?>