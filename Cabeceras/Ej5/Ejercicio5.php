<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <?php
    if(isset($_GET['pagErronea'])){
        print "<p style='color:red;'>El nombre no es valido</p>";
        print "<p style='color:red;'>La edad no esta entre el intervalo especificado</p>";
    }
        if(isset($_GET['error'])){
            print "<p style='color:red;'>La edad no esta entre el intervalo especificado</p>";
        }
        if(isset($_GET['nombreErroneo'])){
            print "<p style='color:red;'>El nombre no es valido</p>";
        }
    ?>

    <form action="Comprobar.php" method="post">
        <p>Introduzca su nombre: <input type="text" name="Nombre" id="Nombre"></p>
        <p>Escriba su edad: <input type="number" name="edad" id="edad"></p>
        <p><input type="submit" value="Comprobar" name="Comprobar"><input type="reset" value="Borrar"></p>
    </form>
</body>
</html>