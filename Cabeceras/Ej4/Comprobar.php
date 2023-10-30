<?php include('../Funciones.php');
    $edad = sanear( $_REQUEST['edad']);

    if(isset($_REQUEST['Comprobar'])){
        if($edad >=18 && $edad <= 130){
            print "<p>Su edad es de <b>".$edad."</b></p>";
        }else{
            header("location:Ejercicio4.php?error=1");
        }
    }

?>