<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="comprobar.php" method="post">
    <p>Introduzca una direccion de un sitio web</p>
    <p>(ej http:www.google.com): <input type="text" name="cabecera" id="cabecera"></p>
    <?php
        if(isset($_GET['error']) && $_GET['error'] == 1){
            print "<p style='color:red;'>La url esta vacia</p>";
        }
    ?>
    <input type="submit" value="enviar" name="enviar">
    </form>

</body>
</html>