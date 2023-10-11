
    <?php

    $minimo = $_REQUEST['Minimo'];
    $maximo = $_REQUEST['Maximo'];
    $ValorMinimo = $_REQUEST['ValorMinimo'];
    $ValorMaximo = $_REQUEST['ValorMaximo'];

    
    $aleatorioValores = rand($ValorMinimo,$ValorMaximo);
    $arr = array();

    echo "<h1>Datos iniciales</h1>";

    print "<p>Numero de valores en la matriz: ".rand($minimo,$maximo)."</p>";
    print "<p>Valores elegidos al azar entre ".$ValorMinimo. "y".$ValorMaximo."</p>";

    print "<h1>Matriz de valores</h1>";

        for ($i=0; $i < $aleatorioValores; $i++) { 
            $aleatorioindice = rand($Minimo,$maximo);
            $arr[] = $aleatorioindice;
        }

print "<pre>";
print_r($arr);
print "</pre";
    ?>
    <p><a href="index.html">Volver al formulario</a></p>