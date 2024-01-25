<?php

    if(isset($_POST["enviar"])){

        $foto = $_FILES["archivo"];

        if(is_uploaded_file($foto["tmp_name"])){
            if(!is_dir("directorio")){
                mkdir("directorio");
            }
            $archivo = $foto["name"];
            $directorio = "directorio/";
            $ruta = $directorio.$archivo;
            move_uploaded_file($foto["tmp_name"],$ruta);

        }
            switch ($foto["error"]) {
                case 1:
                    print "Es mas grande que el php.ini";
                    break;
                case 2:
                    print "no admite el formulario tanto peso";
                    break;
                case 4:
                    print "error de subida";
                    break;
                default:
                    break;
            }
        

        

    }

?>