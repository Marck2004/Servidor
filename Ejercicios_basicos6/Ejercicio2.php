
    <?php
    $Colores = array(
        'Colores Fuertes'=>array('Rojo'=>'FF0000','verde'=>'00FF00','azul'=>'0000FF'),
        'Colores Debiles'=>array('rosa'=>'FE9ABC','amarillo'=>'FDF189','malva'=>'BC8F8F'));
        
        echo '<table>';

        foreach( $Colores as $indice1 => $valor){
            echo '<tr><td>'.$indice1.'</td>';
            foreach ($valor as $indice2 => $value) {
            
                echo '<td style="background-color:'.$value.'";>'.$indice2.''.$value.'</td>';
            }
            echo '</tr>';

    }
    echo '</table>';
            
    ?>