<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    if(isset($_GET['error'])){
        print "<p style='color:red;'>No ha escrito su nombre o los caracteres no son los esperados</p>";
    }

    ?>
    <form action="datos.php" method="post">
        <p>Escriba su nombre: <input type="text" name="Nombre" id="Nombre"></p>
        <input type="submit" value="Comprobar" name="Comprobar"><input type="reset" value="Borrar">
    </form>    
</body>
</html>