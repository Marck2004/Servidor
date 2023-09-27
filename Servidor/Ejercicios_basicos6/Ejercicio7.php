
    <?php

        $NumeroMinimo = $_REQUEST['NumeroMinimo'];  
        $NumeroMaximo = $_REQUEST['NumeroMaximo'];
        $NumerosMinimos = $_REQUEST['NumerosMinimos'];
        $NumerosMaximos = $_REQUEST['NumerosMaximos'];
        $NumeroEliminado = $_REQUEST['NumeroEliminado'];
            $IndiceAleatorio = rand($NumeroMinimo,$NumeroMaximo);

    echo "<h1>Datos Iniciales</h1>

        <p>Numeros de valores de la matriz</p>".$IndiceAleatorio;

    print "<p>Valores elegidos al azar entre</p>".$NumerosMinimos." y ".$NumerosMaximos;

    print "<h1>Matriz inicial de valores</h1>";

    $arr = array();

        for ($i=0; $i < $IndiceAleatorio; $i++) { 
            $ValoresAleatorio = rand($NumerosMinimos,$NumerosMaximos);
            $arr[] = $ValoresAleatorio;

        }

print "<pre>";
print_r($arr);
print "</pre>";

        if(array_search($NumeroEliminado,$arr)){
    $Eliminados = array_keys($arr, $NumeroEliminado);
    
print "<p>Los valores eliminados son: </p>";
print "<pre>";
print_r($Eliminados);
print "</pre";
            unset($Eliminados);

}


    ?>
    <p><a href="index.html">Volver al formulario</a></p>