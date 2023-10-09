
    <?php

    $valordado1 = rand(1,6);

    $valordado2 = rand(1,6);


print "Jugador1 <br><img src='img/$valordado1.svg'><br>";
print "Jugador2 <br><img src='img/$valordado2.svg'><br>";

    if($valordado1 > $valordado2){
        print "Ha ganado el jugador 1";

    }else if($valordado2 > $valordado1){
        print "Ha ganado el jugador 2";
    }else{
        print "Han quedado empate";
    }
    ?>