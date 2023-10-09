
    <?php

    $gmail = $_REQUEST['gmail'];

    function validarPatron($patron,$cadenaComparada){
        if(preg_match($patron,$cadenaComparada)){
            print "Gmail aceptado";
        }else{
            print "Caracteres incorrectos";
        }
        }
    validarPatron('/^[a-zA-Z0-9._*%+]+@gmail\.com$/',$gmail)
    ?>