
    <?php

        $dado1 = rand(1,6);
        $dado2 = rand(1,6);
        $dado3 = rand(1,6);

        $suma = $dado1 + $dado2 + $dado3;

    echo "<div style='border:3px solid red;width:445px'><img src='img/$dado1.svg'>
    <img src='img/$dado2.svg'>
    <img src='img/$dado3.svg'></div>";

    switch (!is_nan($dado1) || !is_nan($dado2) || !is_nan($dado3)){
        case $dado1==$dado2 && $dado2==$dado3 && $dado1==$dado3:
            print "Ha sacado trio";
        break;
        case $dado1==$dado2 || $dado1==$dado3 || $dado2==$dado3:
            print "Ha sacado dobles";
        break;
        default:
            print "La suma es de: ".$suma;
        break;
    }

    ?>