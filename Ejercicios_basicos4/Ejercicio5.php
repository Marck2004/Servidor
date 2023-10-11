    <?php

        $dado1 = 1;
        $dado2 = 1;
        $dado3 = 3;

        $dado4 = 6;
        $dado5 = 6;
        $dado6 = 4;

            $sumajugador1 = $dado1 + $dado2 + $dado3;
            $sumajugador2 = $dado4 + $dado5 + $dado6;

        echo "<div style='border:3px solid red; width:450px;float:left;'><img src='img/$dado1.svg'>
        <img src='img/$dado2.svg'>
        <img src='img/$dado3.svg'>
        </div>";
    
        echo "<div style='margin-left:15px; border:3px solid blue; width:450px;float:left'><img src='img/$dado4.svg'>
        <img src='img/$dado5.svg'>
        <img src='img/$dado6.svg'>
        </div>";
    
    if($dado1==$dado2 || $dado2==$dado3 && $dado4==$dado5 || $dado5==$dado6){
        print "Los dos jugadores han sacado dobles";
        if($sumajugador1 > $sumajugador2){
            print "Ha ganado el jugador 1 porque su suma es ".$sumajugador1;
        }else if($sumajugador2 > $sumajugador1){
            print "Ha ganado el jugador 2 porque su suma es ".$sumajugador2;
        }
}
    switch ($dado1 && $dado2 && $dado3 && $dado4 && $dado5 && $dado6) {
        case $dado1==$dado2 && $dado2==$dado3 && $dado4!=$dado5 && $dado5!=$dado6:
            print "Ha ganado el jugador 1, por sacar trio";
        break;
        case $dado1!=$dado2 && $dado2!=$dado3 && $dado4==$dado5 && $dado5==$dado6:
            print "Ha ganado el jugador 2, por sacar trio";
        break;
        case ($dado1==$dado2 || $dado2==$dado3) && ($dado4!=$dado5 || $dado5!=$dado6):
            print "Ha ganado el jugador 1, por sacar dobles";
        break;
        case $dado1!=$dado2 && $dado2!=$dado3 && $dado4==$dado5 || $dado5==$dado6:
            print "Ha ganado el jugador 2, por sacar dobles";
        break;
        case $sumajugador1 > $sumajugador2:
            print "Ha ganado el jugador 1 porque su suma es. ".$sumajugador1;
        break;
        case $sumajugador2 > $sumajugador1:
            print "Ha ganado el jugador 2 porque su suma es. ".$sumajugador2;
        break;
        default:
            print "Han quedado empate";
        break;
        }

    ?>