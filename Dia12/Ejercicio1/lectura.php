<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

    <?php
    $ficheroleido = fopen("./index.html",'r');
    $escribirtexto = fopen("./fich_salida.txt",'w');

        if(!$ficheroleido) die ("EROR: El fichero no ha podido abrirse");

       echo fwrite($escribirtexto,fread($ficheroleido,filesize("./index.html")));

    fclose($escribirtexto);
    fclose($ficheroleido);
    ?>

    </body>
</html>