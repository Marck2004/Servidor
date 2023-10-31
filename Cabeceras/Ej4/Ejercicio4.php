<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <?php

        if(isset($_GET['error'])){
            print "<p style='color:red'>Su edad no esta entre 18 y 130 años</p>";
        }

    ?>
    <form action="Comprobar.php" method="post">
        <p>Escriba su edad (entre 18 y 130 años): <input type="number" name="edad" id="edad"></p>
        <input type="submit" value="Comprobar" name="Comprobar"><input type="reset" value="Borrar">
    </form>
</body>
</html>