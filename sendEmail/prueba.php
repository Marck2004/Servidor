<?php

    $para ="marcosmaestrocobo@gmail.com";
    $asunto = "prueba";
    $descripcion = "este es el correo de prueba";
    $de ="From: mcobomaestro@gmail.com";

    if(mail($para,$asunto,$descripcion,$de)){
        echo "Correo enviado satisfactoriamente";
    }else{
        echo "Correo enviado ha tenido problemas";
    }

?>