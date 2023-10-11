<?php
    $arr = array('<p>ggg</p>' => '<p>hhh</p>','<h1>cobo</h1>'=>'<h1>marcos</h1>');

    foreach ($arr as $Indice => $value) {
        if(isset($arr)){
            print htmlspecialchars(trim(strip_tags($arr[$Indice])));
            print htmlspecialchars(trim(strip_tags($Indice)));
        }
    }

?>
