<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Ejercicio2</title>
</head>
<body>

    <?php
    $tirada = rand(1,6);
    $tiradadoble = rand(1,6);
    $resultado = $tirada + $tiradadoble;
    $espacios3 = "&nbsp&nbsp&nbsp";
    $espacios2 = "&nbsp&nbsp";

    switch($tirada) {
        case 1: print "<div class='dado1'><h1 id=dado1>$espacios3$espacios2*</h1></div>";
        break;
        case 2: print "<div class='dado1'><h1 id=dado2>$espacios3*$espacios2*</h1></div>";
        break;
        case 3: print "<div class='dado1'><h1>$espacios3$espacios3$espacios3*<br>$espacios3$espacios2*<br>&nbsp*</h1></div>";
        break;
        case 4: print "<div class='dado1'><h1 id=dado4>$espacios3*$espacios2*<br>$espacios3*$espacios2*</h1></div>";
        break;
        case 5: print "<div class='dado1'><h1>*$espacios3$espacios3$espacios2*<br>$espacios3$espacios2*<br>*$espacios3$espacios3$espacios2*</h1></div>";
        break;
        case 6: print "<div class='dado1'><h1 id=dado6>$espacios3*$espacios2*<br>$espacios3*$espacios2*<br>$espacios3*$espacios2*</h1></div>";
    }
    switch($tiradadoble) {
        case 1: print "<div class='dado1'><h1 id=dado1>$espacios3$espacios2*</h1></div>";
        break;
        case 2: print "<div class='dado1'><h1 id=dado2>$espacios3*$espacios2*</h1></div>";
        break;
        case 3: print "<div class='dado1'><h1>$espacios3$espacios3$espacios3*<br>$espacios3$espacios2*<br>&nbsp*</h1></div>";
        break;
        case 4: print "<div class='dado1'><h1 id=dado4>$espacios3*$espacios2*<br>$espacios3*$espacios2*</h1></div>";
        break;
        case 5: print "<div class='dado1'><h1>*$espacios3$espacios3$espacios2*<br>$espacios3$espacios2*<br>*$espacios3$espacios3$espacios2*</h1></div>";
        break;
        case 6: print "<div class='dado1'><h1 id=dado6>$espacios3*$espacios2*<br>$espacios3*$espacios2*<br>$espacios3*$espacios2*</h1></div>";
    }
    
    print "<div class ='resultado'><h1>$resultado</h1></div>"

    ?>
</body>
</html>