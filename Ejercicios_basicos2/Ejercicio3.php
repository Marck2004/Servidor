<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>Ejercicio3</title>
</head>
<body>
    
    <?php
$tirada = rand(1,6);
$espacios3 = "&nbsp&nbsp&nbsp";
$espacios2 = "&nbsp&nbsp";

switch($tirada) {
    case 1: print "<div class='dado1'><h1 id=dado1>$espacios3$espacios2*</h1></div>";
    print "<div id = 'ficha' style = 'top:160px; left:30px;'></div>";
    break;
    case 2: print "<div class='dado1'><h1 id=dado2>$espacios3*$espacios2*</h1></div>";
    print "<div id = 'ficha' style = 'top:160px; left:150px;'></div>";
    break;
    case 3: print "<div class='dado1'><h1>$espacios3$espacios3$espacios3*<br>$espacios3$espacios2*<br>&nbsp*</h1></div>";
    print "<div id = 'ficha' style = 'top:160px; left:270px;'></div>";
    break;
    case 4: print "<div class='dado1'><h1 id=dado4>$espacios3*$espacios2*<br>$espacios3*$espacios2*</h1></div>";
    print "<div id = 'ficha' style = 'top:160px; left:390px;'></div>";
    break;
    case 5: print "<div class='dado1'><h1>*$espacios3$espacios3$espacios2*<br>$espacios3$espacios2*<br>*$espacios3$espacios3$espacios2*</h1></div>";
    print "<div id = 'ficha' style = 'top:160px; left:510px;'></div>";
    break;
    case 6: print "<div class='dado1'><h1 id=dado6>$espacios3*$espacios2*<br>$espacios3*$espacios2*<br>$espacios3*$espacios2*</h1></div>";
    print "<div id = 'ficha' style = 'top:160px; left:630px;'></div>";
}


print "<br>
<table>
<tr>

<td><h1>1</h1></td>
<td><h1>2</h1></td>
<td><h1>3</h1></td>
<td><h1>4</h1></td>
<td><h1>5</h1></td>
<td><h1>6</h1></td>
</tr>

</table>";



    ?>

</body>
</html>