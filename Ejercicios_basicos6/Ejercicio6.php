

    <?php

    $NumeroMinimo = $_REQUEST['NumeroMinimo'];
    $NumeroMaximo = $_REQUEST['NumeroMaximo'];
    $NumerosMinimos = $_REQUEST['NumerosMinimos'];
    $NumeroMaximos = $_REQUEST['NumerosMaximos'];
    $Orden = $_REQUEST['Orden'];

        $Indices = rand($NumeroMinimo,$NumeroMaximo);

        $arr = array();

        
    for($i = 0; $i < $Indices;$i++){
        $valores = rand($NumerosMinimos,$NumeroMaximos);
        $arr[] =$valores;

    }
    if($Orden == "Inverso"){
        rsort($arr);

}
    print "<pre>";
    print_r($arr);
    print "</pre>";

    if($Orden == "Inverso"){
        print "<p>Matriz ordenada inversa</p>";
}

    ?>
    <p><a href="index.html">Volver al formulario</a></p>