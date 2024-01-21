<?php

    if(isset($_POST["enviar"])){


        $nombre = htmlspecialchars(trim(strip_tags($_REQUEST["nombre"])),ENT_QUOTES,'UTF-8');
        $email = htmlspecialchars(trim(strip_tags($_REQUEST["email"])),ENT_QUOTES,'UTF-8');
        $mensaje = htmlspecialchars(trim(strip_tags($_REQUEST["mensaje"])),ENT_QUOTES,'UTF-8');
        $archivo = $_FILES["fichero"];
        $archivoSecundario = $_FILES["ficheroSecundario"];

        if(isset($nombre) && isset($email) && isset($mensaje)){

        if(is_uploaded_file($_FILES["fichero"]["tmp_name"]) && is_uploaded_file($_FILES["ficheroSecundario"]["tmp_name"])){

            $ruta = "ficheros/".$archivo["name"];
            $rutaSecundaria = "ficheros/".$archivoSecundario["name"];

            move_uploaded_file($archivo["tmp_name"],$ruta);
            move_uploaded_file($archivoSecundario["tmp_name"],$rutaSecundaria);

            $to = $email;
    
            // Asunto del correo
            $subject = 'Test ejercicio 4';
    
            // Separador de líneas
            $eol = "\r\n";
    
            // Generar un límite único para el contenido del mensaje
            $boundary = md5(time());
    
            // Cabeceras del correo
            $headers = "From: mcobomaestro@gmail.com" . $eol;
            $headers .= "Reply-To: $email" . $eol;
            $headers .= "MIME-Version: 1.0" . $eol;
            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"" . $eol;
    
            // Cuerpo del mensaje
            $body = "--$boundary" . $eol;
            $body .= "Content-Type: text/plain; charset=\"utf-8\"" . $eol;
            $body .= "Content-Transfer-Encoding: 8bit" . $eol . $eol;
            $body .= $mensaje . $eol;
    
            // Adjuntar el archivo1 al mensaje
            $body .= "--$boundary" . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"$archivo[name]\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= chunk_split(base64_encode(file_get_contents($ruta))) . $eol;

            // Adjuntar el archivo2 al mensaje
            $body .= "--$boundary" . $eol;
            $body .= "Content-Type: application/octet-stream; name=\"$archivoSecundario[name]\"" . $eol;
            $body .= "Content-Transfer-Encoding: base64" . $eol;
            $body .= "Content-Disposition: attachment" . $eol . $eol;
            $body .= chunk_split(base64_encode(file_get_contents($rutaSecundaria))) . $eol;

            // Fin del mensaje
            $body .= "--$boundary--";

        if(mail($to,$subject,$body,$headers)){

            print "<p>Correo enviado con exito</p>";
            print "<p><a href='form.php'>Volver al formulario</a></p>";
        }else{
            print "<p>Correo no enviado ocurrio un error</p>";
            print "<p><a href='form.php'>Volver al formulario</a></p>";
        header("Refresh: 5; URL=form.php?error=1");
        }
    }else{
        print "<p>Correo no enviado ocurrio un error</p>";
        print "<p><a href='form.php'>Volver al formulario</a></p>";
        //header("Refresh: 5; URL=form.php?error=1"); 
    }

    }else{
        print "<p>Correo no enviado ocurrio un error</p>";
        print "<p><a href='form.php'>Volver al formulario</a></p>";
        header("Refresh: 5; URL=form.php?error=1");
    }
    }else{
        header("location:form.php?error=1");
    }

?>