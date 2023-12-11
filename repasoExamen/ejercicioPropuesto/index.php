<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="validar.php" method="post">

        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
        <?php

            if(isset($_GET['errorUser']) && $_GET['errorUser'] == 1){
                print "<p style='color:red;'>El campo usuario esta vacio/erroneo</p>";

            }

        ?>
        <p>Contraseña: <input type="text" name="clave" id="clave"></p>
        <?php
        if(isset($_GET['errorClave']) && $_GET['errorClave'] == 1){
                print "<p style='color:red;'>El campo clave esta vacio/erroneo</p>";
            }
            ?>
        1<input type="checkbox" name="enviar[]" id="hola">
        2<input type="checkbox" name="enviar[]" id="adios">
        3<input type="checkbox" name="enviar[]" id="vacio" value="vacio">

        <input type="submit" value="enviar" name="enviarForm">
    </form>
</body>
</html>