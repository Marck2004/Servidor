<?php include("../Funciones.php");

if(isset($_REQUEST['Enviar'])){
    $url = sanear($_REQUEST['url']);

    if(validar($url) == 1){
        header("Location:Ejercicio1.php?error=1");
    }else{
        header('Location:'.$_REQUEST['url']);
    }
}else{
    header("Location:Ejercicio1.php?error=1");
}
?>