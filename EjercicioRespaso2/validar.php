<?php

    $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
    $direccion = htmlspecialchars(trim(strip_tags($_REQUEST['direccion'])),ENT_QUOTES,'utf-8');
    $email = htmlspecialchars(trim(strip_tags($_REQUEST['email'])),ENT_QUOTES,'utf-8');

    if(isset($_REQUEST['enviar'])){
        if(empty($nombre) || empty($direccion) || empty($email) ||
         !preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú\s-]+$/',$nombre) || !preg_match('/^[calle|avenida|plaza][a-záéíóú\sñ]+$/u',$direccion) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
            if(empty($nombre) || !preg_match('/^[A-ZÁÉÍÓÚ][a-záéíóú\s-]+$/',$nombre)){
                $error = 'error=1&';
            }
            if(empty($direccion) || !preg_match('/^[calle|avenida|plaza][a-záéíóú\sñ]+$/u',$direccion)){
                $error2 = 'error2=1&';
            }
            if(empty($email) || !filter_var($email,FILTER_VALIDATE_EMAIL)){
                $error3 = 'error3=1&';
            }
            if(empty($_REQUEST['archivo'])){
                $error4 = 'error4=1';
            }
            header('location:index.php?'.$error.$error2.$error3.$error4);
         }else{
            if(!is_dir("ficherosSubidos/")){
            mkdir("ficherosSubidos");
        }else{
            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                $ficheroNuevo = $_FILES['archivo']['name'];

                move_uploaded_file($_FILES['archivo']['tmp_name'],"ficherosSubidos/".$ficheroNuevo);

                
                header('location:index.php?enviado=1');
            }
        }
         }

        }

?>
