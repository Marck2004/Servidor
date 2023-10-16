
    <?php

    $datos = rand(5,15);

    $array = array();

    for ($i=0; $i < $datos; $i++) {
        $valores=rand(0,10);
        $array[]=$valores;
    }
        
echo '<pre>';
print_r($array);
echo '</pre>';

    ?>