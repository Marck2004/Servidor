<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
<?php 

        if(isset($_GET["error"])){
            print "<p style='color:red;'>Introdujo una URL no valida</p>";
        }
?>

    <form action="ej1.php" method="POST">
    <p>Introduzca una direccion de sitio web</p>
    <p>(ej http://www.google.com) <input type="text" name="url" id="url"></p>
    <input type="submit" value="Enviar" name="Enviar">
    </form>
  
</body>
</html>