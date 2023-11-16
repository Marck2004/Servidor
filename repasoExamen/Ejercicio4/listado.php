<?php

    $abrirDirectorio = opendir("escrituraFicheros");

        while($archivo = readdir($abrirDirectorio)){
            if(!is_dir($archivo)){
                print $archivo;
                print " Su ultima modificacion fue: ".date("d-m-Y H-i-s" ,filemtime('../escrituraFicheros/'.$archivo))."<br>";
                print " Tiene un espacio ocupado de: ".filesize('../escrituraFicheros/'.$archivo)." bytes<br>";
            }
        }
        closedir($abrirDirectorio);

?>