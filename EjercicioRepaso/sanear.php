<?php

    $edad = htmlspecialchars(trim(strip_tags($_REQUEST['Edad'])),ENT_QUOTES,'utf-8');
    $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['Nombre'])),ENT_QUOTES,'utf-8');

    if((empty($edad)) || 
    (empty($nombre)) || 
    (!preg_match('/^(1[8-9]|[2-3][0-9]|40)$/',$edad)) || 
    (!preg_match('/^[A-ZÁÉÍÓÚÜÑ][a-zA-ZÁÉÍÓÚÜÑñ]*$/u',$nombre))){

        if(empty($edad) || !preg_match('/^(1[8-9]|[2-3][0-9]|40)$/',$edad)){
            $error1 = 'error1=1&';
        }
        if(empty($nombre) || !preg_match('/^[A-ZÁÉÍÓÚÜÑ][a-zA-ZÁÉÍÓÚÜÑñ]*$/u',$nombre)){
            $error2 = 'error2=1&';
        }
        header('location:index.php?'.$error1.$error2);
        captarErrores();
    }else{
        
        if(isset($_REQUEST['Enviar'])){

            if(!is_dir("dir_Enviar")){
        mkdir("dir_Enviar");
    }

    if(is_uploaded_file($_FILES['Archivo']['tmp_name'])){

        $fichero = $_FILES['Archivo']['name'];

        move_uploaded_file($_FILES['Archivo']['tmp_name'],"dir_Enviar/".$fichero);
        
        
        if(!is_dir($directorio.'/'.$fichero) && !is_dir($directorio.'/'.$fichero)){
            header("location:index.php?correcto=".$fichero."&correcto2=borrar.png&correcto3=descargar.png");
        }
      
    }
        }   
    }

    function captarErrores(){
        $abrirFich = fopen("errores.txt","a");


        if(!$abrirFich){
            fwrite($abrirFich,"Error: El fichero no pudo abrirse");
        }
        if(empty($edad)){
            fwrite($abrirFich,"La cadena edad esta vacia\n");
        }
        if(empty($nombre)){
            fwrite($abrirFich,"La cadena nombre esta vacia\n");
        }

        fclose($abrirFich);
    }


?>