<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
    
    <?php 
        if(isset($_GET['error'])){
            print "<p style='color:red;'>Clave incorrecta</p>";
        }

    ?>

<form action="Ejercicio2.php" method="post">
        <p>Introduzca la clave(z80): <input type="text" name="clave" id="clave"></p>
        <input type="submit" value="Enviar" name="Enviar">
</form>

</body>
</html>