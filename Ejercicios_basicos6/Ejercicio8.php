
    <?php

    $Numeros = $_REQUEST['DNI'];

    $Letras = array('T','R','W','A','G','M','Y','F','P','D',
    'X','B','N','J','Z','S','Q','V','H','J','C','K','E');

    $BuscarLetra = $Numeros%23;

    $LetraEncontrada = $Letras[$BuscarLetra];

    print "La letra del DNI ".$Numeros." es ".$LetraEncontrada; 


    ?>
    <P><a href="index.html">Volver al formulario</a></P>