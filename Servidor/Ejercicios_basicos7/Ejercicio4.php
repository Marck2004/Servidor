

    <?php

        $Fila1Columna1=$_REQUEST['Fila1Columna1'];
        $Fila1Columna2=$_REQUEST['Fila1Columna2'];
        $Fila1Columna3=$_REQUEST['Fila1Columna3'];

        $Fila2Columna1=$_REQUEST['Fila2Columna1'];
        $Fila2Columna2=$_REQUEST['Fila2Columna2'];
        $Fila2Columna3=$_REQUEST['Fila2Columna3'];

        $Fila3Columna1=$_REQUEST['Fila3Columna1'];
        $Fila3Columna2=$_REQUEST['Fila3Columna2'];
        $Fila3Columna3=$_REQUEST['Fila3Columna3'];

    $SumaFila1 = $Fila1Columna1+$Fila1Columna2+$Fila1Columna3;
    $SumaFila2 = $Fila2Columna1+$Fila2Columna2+$Fila2Columna3;
    $SumaFila3 = $Fila3Columna1+$Fila3Columna2+$Fila3Columna3;

    function sumarfilas($Fila1,$Fila2,$Fila3){
        echo "<p>La suma de la fila 0 es: ".$Fila1."</p>";
        echo "<p>La suma de la fila 1 es: ".$Fila2."</p>";
        echo "<p>La suma de la fila 2 es: ".$Fila3."</p>";

    if($Fila1 > $Fila2 && $Fila1 > $Fila3){
        print "Es mayor la fila 1 con una suma de: ".$Fila1;
    }else if($Fila2 > $Fila1 && $Fila2 > $Fila3){
        print "Es mayor la fila 2 con una suma de: ".$Fila2;
    }else if($Fila3 > $Fila1 && $Fila3 > $Fila2){
        print "Es mayor la fila 3 con una suma de: ".$Fila3;
    }else{
        print "No hay una fila mayor hay empate";
    }

    }
        sumarfilas($SumaFila1,$SumaFila2,$SumaFila3);
    ?>
    <p><a href="index.html">Volver al formulario</a></p>