
    <?php

        $diassemana = array(0 => 'Lunes',1 =>'Martes', 2 => 'Miercoles', 3 => 'Jueves',
        4 => 'Viernes', 5 => 'Sabado', 6 => 'Domingo');

        print "Bucle foreach\n";
        foreach ($diassemana as $indice => $dato) {
            print "<pre> ".$indice." ".$dato."</pre>";
        }

        print "Bucle for";
        for($i=0;$i < count($diassemana);$i++){
            print "<p>".$i." ".$diassemana[$i]."</p>";
        }
    ?>