<?php

    if(isset($_POST["enviar"])){
        $nombre = $_POST["nombre"];
        $edad = $_POST["edad"];
        $direccion = $_POST["direccion"];
        $foto = $_FILES["foto"];
        $telefono = $_POST["telefono"];

        if(!preg_match('/^[A-Za-zñÑ][A-Za-zñ\s-]+$/',$nombre) ||
            !preg_match('/^\d{0,2}$/',$edad) ||
            !preg_match('/^(calle|plaza|avenida)[A-Za-z\s-]+$/',$direccion) ||
            !preg_match('/^(91|6)\d{7}$/',$telefono)){
            if(!preg_match('/^[A-Za-zñÑ][a-zñ\s-]+$/',$nombre)){
                $errorNombre = 'errorNombre=1&';
            }
            if(!preg_match('/^\d{0,2}$/',$edad) || $edad == ''){
                $errorEdad = 'errorEdad=1&';
            }
            if(!preg_match('/^(calle|plaza|avenida)[A-Za-z\s-]+$/',$direccion)){
                $errorDireccion = 'errorDireccion=1&';
            }
            if($foto["type"] != "image/jpeg"){
                $errorFoto = 'errorFoto=1&';
            }
            if(!preg_match('/^(91|6)\d{7}$/',$telefono)){
                $errorTelefono = 'errorTelefono=1';
            }
            header("location:form.php?".$errorNombre.$errorEdad.$errorDireccion.$errorFoto.$errorTelefono);
        }else{
            print "TODO CORRECTO";
            print "<a href='form.php'>Volver</a>";
        }
    }

?>