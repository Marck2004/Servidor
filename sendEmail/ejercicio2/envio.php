<?php

    if(isset($_POST["enviar"])){


        $nombre = htmlspecialchars(trim(strip_tags($_REQUEST["nombre"])),ENT_QUOTES,'UTF-8');
        $email = htmlspecialchars(trim(strip_tags($_REQUEST["Email"])),ENT_QUOTES,'UTF-8');
        $mensaje = htmlspecialchars(trim(strip_tags($_REQUEST["mensaje"])),ENT_QUOTES,'UTF-8');

        if(isset($nombre) && isset($email) && isset($mensaje)){
        $headers = "MIME-Version:1.0\r\n";
        $headers .= "Content-type:text/html;charset=utf-8\r\n";
        $headers .= "From: <mcobomaestro@gmail.com>\r\n";
        $headers .= "Reply-to: mcobomaestro@gmail.com\r\n";
        $headers .= "Cc: mcobomaestro@gmail.com\r\n";
        $headers .= "Bcc: mcobomaestro@gmail.com\r\n";

        if(mail($email,$mensaje,$headers)){
            print "<p>Correo enviado con exito</p>";
            print "<p><a href='form.php'>Volver al formulario</a></p>";
        }else{
            print "<p>Correo no enviado ocurrio un error</p>";
        }

    }else{
        header("location:form.php?error=1");
    }
    }else{
        header("location:form.php?error=1");
    }

?>