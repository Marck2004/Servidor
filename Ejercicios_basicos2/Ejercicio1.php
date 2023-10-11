<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles1.css">
    <title>Ejercicio1</title>
</head>
<body>

    <?php
    $colores = ["green","blue","red"];
    $reverso = ["red","green","blue"];
    $dif = ["blue","red","green"];
    $n = rand(0,2);

    echo "<div class='circulos' id='circulo1' style='background-color:$colores[$n];'></div>";
    echo "<div class='circulos' id='circulo2' style='background-color:$reverso[$n];'></div>";
    echo "<div class='circulos' id='circulo3' style='background-color:$dif[$n];'></div>";
    ?>

</body>
</html>

