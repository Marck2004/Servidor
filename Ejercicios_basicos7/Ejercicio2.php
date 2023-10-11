
    <?php

        $Numero = $_REQUEST['Numero'];

        function factorizarEnPrimos($numero) {
            
            $factorPrimo = 2;
            echo '<b>'.$numero.'</b><br>';
            while ($numero > 1) {
                
                if ($numero % $factorPrimo == 0) {
                    
                    echo $factorPrimo. '<br> ' ;
                    $numero = $numero / $factorPrimo;
                    
                } else {
                    
                    $factorPrimo++;
                }
                
            }
            
        }
        
        factorizarEnPrimos($Numero);

    ?>
    <p><a href="index.html">Volver al formulario</a></p>