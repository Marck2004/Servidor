

    <?php

    $telefono = $_REQUEST['tlf'];

        function validarTlf($patron,$numeroTelefono){

            if(preg_match($patron,$numeroTelefono)){
                print "Numero de telefono aceptado";
            }else{
            print "Numero de telefono incorrecto";
        }
        }

        validarTlf('/^\+34\s[0-9]{9}$/',$telefono);
    ?>