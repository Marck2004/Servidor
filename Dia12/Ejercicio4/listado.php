<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
</head>
<body>
    <?php

        $manejador = opendir("../Ejercicio3");

        if(!$manejador) die ("ERROR: no se ha abierto el directorio");

            while($archivo = readdir($manejador)){
        echo ''.$archivo.' con un tamaño de '.filesize("../Ejercicio3/".$archivo).' bytes su ultima modificacion fue '.date("d-m-Y H:i:s",filemtime("../Ejercicio3/".$archivo)).'<br>';
            }
            closedir($manejador);
    ?>
</body>
</html>