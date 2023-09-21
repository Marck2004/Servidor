
    <?php

    $kilos = $_REQUEST['kilos'];

    $altura = $_REQUEST['altura'];

        $imc = $kilos / ($altura * 2);

    print "El indice de masa corporal es de: ".(int)$imc;

    ?>  

    