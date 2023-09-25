
    <?php

        $arr = [1,2,3,4,5,6];
        $aleatorio = rand(1,10);
        $contador = 0;
        $contadorimpar = 0;
        for ($i=0; $i < $aleatorio; $i++) { 
            $posicionarray = rand(1,5);
            print "<img src='img/".$arr[$posicionarray].".svg'>";

            if($arr[$posicionarray ] % 2==0){
                $contador++;
            }else if($arr[$posicionarray ] % 2 !=0){
                $contadorimpar++;
            }
        }
        print "Hay $contador pares y $contadorimpar impares";


    ?>