

    <?php

    $Convertidor = $_REQUEST['euros'];
    $moneda = $_REQUEST['Radio'];

    if($Convertidor>=0 && $Convertidor < 1000000){

        switch ($moneda) {
            case 'USA':
                print $Convertidor." dolares son: ".$Convertidor/1.00." euros";    
                break;
            case 'pesos':
                print $Convertidor." pesos son: ".$Convertidor/143.05." euros";
                break;
            case 'Yenes':
                print $Convertidor." Yenes son: ".$Convertidor/166.386." euros";
                break;
            case 'pesetas':
                print $Convertidor." pesetas son: ".$Convertidor/20.08." euros";
                break;
        }
    }else {
        print "Introduzca numeros apropiados";
    }


    ?>