<?php

    $Fondo = $_REQUEST['Fondo'];

    $Letra = $_REQUEST['Letra'];

    if(!is_null($_REQUEST['Fondo']) && !is_null($Letra)){
        print "<body style='background-color:$Fondo;'></body>";
        print "<p style='color:$Letra'>Se han cambiado los colores correctamente</p>";
    }else{
        print "No se han cambiado los colores";
    }


?>
<p><a href="index_ej4.html">Volver al formulario</a></p>