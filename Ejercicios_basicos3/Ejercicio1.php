  <?php

  $valor = $_REQUEST['segundos'];

     $introducido = $valor;

    if($valor >=60){
      $minutos = $valor/60;
      $segundos = $valor%60;
    }else if($valor < 60){
      $minutos = 0;
      $segundos = $valor%60;
    }

  print "El valor de ".$introducido." pasado a minutos es: ". (int)$minutos." minutos y ". (int)$segundos." segundos";

    ?>
