
    <?php

    /*ha obtenido una pareja de dados iguales de mayor valor, si los
    dos han obtenido parejas distintas
    ha obtenido una pareja de dados iguales, si el otro jugador no
    ha obtenido pareja
   ha obtenido una puntuación total mayor, si ningún jugador ha
    obtenido pareja*/

        $dado1 = rand(1,6);
        $dado2 = rand(1,6);
        $dado3 = rand(1,6);
        $dado4 = rand(1,6);

            $sumaprimera = $dado1 + $dado2;
            $sumasegunda = $dado3 + $dado4;

        echo "<div style='border:6px solid red;width: 290px;height: 140px;float:left;'>
        <img src='img/$dado1.svg'>
        <img src='img/$dado2.svg'></div>

            <div style='border:6px solid blue;width: 290px;height: 140px;float:left;'>
            <img src='img/$dado3.svg'>
            <img src='img/$dado4.svg'></div>";

    switch (!is_null($dado1) || !is_null($dado2) || !is_null($dado3) || !is_null($dado4)) {
        case $dado1==$dado2 && $dado3!=$dado4:
            print "Ha ganado el primer jugador";
        break;
        case $dado1!=$dado2 && $dado3==$dado4:
            print "Ha ganado el segundo jugador";
        break;
        case $sumaprimera > $sumasegunda:
            print "Ha ganado el primer jugador";
        break;
        case $sumaprimera < $sumasegunda:
            print "Ha ganado el segundo jugador";
        break;
            default: 
        print "Han quedado empate";
        break;
    
    }
    

    ?>
    