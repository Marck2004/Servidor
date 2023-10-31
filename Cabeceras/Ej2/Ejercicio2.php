<?php include("../Funciones.php");


if(isset($_REQUEST['Enviar'])){
    

    $clave = sanear($_REQUEST['clave']);

    if(validarclave($clave) == 1){
        header("location:Ej2.php?error=1");
    }else{
        header("location:codigo.html");
    }

    }else{
    header("location:Ej2.php?error=1");
}

?>