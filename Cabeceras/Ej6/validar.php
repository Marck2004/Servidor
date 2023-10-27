<?php include("../Funciones.php");

    $Nombre = sanear($_REQUEST['Nombre']);
    $Destino = sanear($_REQUEST['Destino']);
    $Duracion = sanear($_REQUEST['Duracion']);
    $DiaSemana = sanear($_REQUEST['DiaSemana']);
    $abrir = fopen("tabla.txt",'a+');

    if((empty($Nombre)) || (empty($Destino)) || (empty($Duracion)) || (empty($DiaSemana))){
    if(empty($Nombre)){
        $error = "error1=1&";
    }
    if(empty($Destino)){
        $error1 = "error2=2&";
        }
        if(empty($Duracion)){
            $error2 = "error3=3&";
        }
        if(empty($DiaSemana)){
            $error3 = "error4=4&";
        }
        header("location:Ejercicio6.php?".$error."".$error1."".$error2."".$error3);
            
    }else{

        if(!$abrir) die ("ERROR: no se pudo abrir el fichero");

        fwrite($abrir,"\n".$Nombre.":".$Destino.":".$Duracion.":".$DiaSemana);

        fclose($abrir);
        header("location:Ejercicio6.php");
    }
?>
<p><a href="Ejercicio6.php">Volver al formulario</a></p>