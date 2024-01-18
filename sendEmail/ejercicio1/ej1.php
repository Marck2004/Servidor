<?php

    if(isset($_REQUEST["enviar"])){
        $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])));
        $apellido = htmlspecialchars(trim(strip_tags($_REQUEST['Apellidos'])));
        $email = htmlspecialchars(trim(strip_tags($_REQUEST['Email'])));
        $asunto = htmlspecialchars(trim(strip_tags($_REQUEST['Asunto'])));
        $mensaje = htmlspecialchars(trim(strip_tags($_REQUEST['mensaje'])));

        if(empty($nombre) || empty($apellido) || empty($email) ||
         empty($asunto) || empty($mensaje)){
            if(empty($nombre)){
                $errorNombre= 'errorNombre=1&';            }
            if(empty($apellido)){
                $errorApellido = 'errorApellido=1&';            }
            if(empty($email)){
                $errorEmail = 'errorEmail=1&';            }
            if(empty($asunto)){
                $errorAsunto = 'errorAsunto=1&';
            }
            if(empty($mensaje)){
                $errorMensaje = 'errorMensaje=1';
                }
                header("location:form.php?".$errorNombre.$errorApellido.$errorEmail.$errorAsunto
                .$errorMensaje);
         }else{
            if(mail($email,$asunto,$mensaje,"mcobomaestro@gmail.com")){
                echo "Correo exitoso";
            }else{
                echo "Hubo un problema con el envio";
            }
         }
    }

?>