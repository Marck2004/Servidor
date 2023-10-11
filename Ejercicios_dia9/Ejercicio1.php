        <?php

        $nombre = $_REQUEST['Nombre'];

        $apellidos = $_REQUEST['Apellidos'];

        if(!empty($nombre) && !is_numeric($nombre)){
            print "<p>Nombre introducido <b>".$nombre."</b></p>";
        }else if($nombre==""){
            print "<p style='color:red;'>No ha introducido ningun valor</p>";
        }else{
            print "<p style='color:red';>Nombre introducido incorrecto</p>";
        }

        if(!empty($apellidos) && !is_numeric($apellidos)){
            print "<p>Apellido introducido <b>".$apellidos."</b></p>";
        }else if($apellidos==""){
            print "<p style='color:red;'>No ha introducido ningun valor</p>";
        }else{
            print "<p style='color:red;'>Apellido introducido incorrecto</p>";
        }
    
        ?>
        <p><a href="index_dia1.html">Volver al formulario</a></p>