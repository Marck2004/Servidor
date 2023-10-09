
    <?php

        $valorinicial = $_REQUEST['valorinicial'];
        $incremento = $_REQUEST['incremento'];
        $numerodevalores = $_REQUEST['numerodevalores'];
        $resultado = $valorinicial;

        print "El valor inicial es de $valorinicial y se va incrementando en $incremento ";
            for ($i=0; $i < $numerodevalores; $i++) { 
                
                $resultado = $resultado + $incremento;
                print "<br> el resultado es: ".$resultado;
            }
    ?>