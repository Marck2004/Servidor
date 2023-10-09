
    <?php

        $Numero = $_REQUEST['Primo'];

        function ComprobarPrimo($primo){

        for ($i=2; $i < $primo; $i++) { 
            
            if($primo==2){
                print "El numero ".$primo." es primo";
                break;
            }else if($primo%$i==0) {
                print "El numero ".$primo." no es primo";
                break;
            }else{
                print "El numero ".$primo." es primo";
                break;
            }
        }

    }
    ComprobarPrimo($Numero);

    ?>
    <p><a href="index.html">Volver al formulario</a></p>