

    <?php

        $fecha = $_REQUEST['fecha'];

        function validarFecha($patron,$fechaValidada){

            if(preg_match($patron,$fechaValidada)){
                print "Fecha correcta";
            }else{
                print "Fecha erronea";
            }
        }
        validarFecha('/^[00-99]\/\[00-99]\/\[0000-9999]$/',$fecha);

    ?>