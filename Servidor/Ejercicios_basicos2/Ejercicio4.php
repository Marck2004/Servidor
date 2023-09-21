<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style4.css">
    <link rel="stylesheet" href="styles1.css">
    <title>Ejercicio4</title>
</head>
<body>
    <?php

$colores = ["green","blue","red"];
$reverso = ["red","green","blue"];
$dif = ["blue","red","green"];
$n = rand(0,2);
$radio = rand(50,150);
$radio2 = rand(50,150);
$radio3 = rand(50,150);

    echo "<div style='background-color:$colores[$n];opacity:0.5; width:$radio3"."px; height:$radio"."px; border-radius:100%; float:left;'></div>";
    echo "<div style='background-color:$reverso[$n];opacity:0.5; width:$radio"."px; height:$radio2"."px; border-radius:100%; float:left;'></div>";
    echo "<div style='background-color:$dif[$n];opacity:0.5; width:$radio2"."px; height:$radio3"."px; border-radius:100%; float:left;'></div>";
    ?>

</body>
</html>
