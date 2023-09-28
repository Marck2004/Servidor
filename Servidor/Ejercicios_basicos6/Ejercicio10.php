

    <?php

        $arr = array('Barcelona'=>'Camp NOU','Real Madrid'=>'Santiago Bernabeu',
                    'Valencia'=>'Mestalla','Real Sociedad'=>'Anoeta');
        
      print "<h1>Estadios de football</h1>";

    print "<ol>";
    foreach ($arr as $Indice => $valor) {
        echo "<li>El equipo: ".$Indice." tiene el estadio".$valor."</li>";
    }
    print "</ol>";

        $Eliminado = array_search("Santiago Bernabeu",$arr);

        unset($arr[$Eliminado]);


    print "<h1>Equipos restantes</h1>";
    print "<ol>";
    foreach ($arr as $Indice => $valor) {
        echo "<li>El equipo: ".$Indice." tiene el estadio".$valor."</li>";
    }
    print "</ol>";
    ?>