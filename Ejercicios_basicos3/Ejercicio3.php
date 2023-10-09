

    <?php

    $a = $_REQUEST['a'];

    $b = $_REQUEST['b'];

    $c = $_REQUEST['c'];

    function calcularsegundogrado($a,$b,$c){

        $cociente = ($b**2) - (4 * $a * $c);

        if ($cociente < 0){ 
        return "No existen soluciones reales";

        }else if( $cociente == 0){
            $unaunicasolucion = (-$b / (2 * $a));
            return "Solo existe una solucion con resultado: ".$unaunicasolucion;

        }else if ((-$b + $cociente) / (2 * $a) > 0){
            $dobleresultado1 = ((-$b + sqrt($cociente)) / (2 * $a));
            $dobleresultado2 = ((-$b - sqrt($cociente)) / (2 * $a));
            return "Los resultados son: ".$dobleresultado1. "y el otro seria: ".$dobleresultado2;
        }else{
            return "no se imprime nada";
        }
    }

    print calcularsegundogrado($a,$b,$c);
    ?>