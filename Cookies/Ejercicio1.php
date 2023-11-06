<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    if(!isset($_COOKIE['Nombre'])){
        print "<p>No existe la cookie</p>";
        setcookie("Nombre","Marcos",time() + 3600);
    }else{
        print "<p>Me llamo ".$_COOKIE["Nombre"]."</p>";
    }
        



    ?>
</body>
</html>