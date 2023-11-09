<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="comprobar.php" method="post">
        <p>Crear cookie con duracion de <input type="number" name="duracion" id="duracion">entre 1 y 60 segundos <input type="submit" name="crear" value="crear"></p>
        <p>Comprobar la cookie <input type="submit" name="comprobar" value="comprobar"></p>
        <p>Eliminar la cookie <input type="submit" name="eliminar" value="eliminar"></p>
    </form>
    <?php

    if(isset($_GET['comprobado']) && $_GET['comprobado'] == 1){
        print "<p>Propiedades: ".date('D, d M Y H:i:s', $_COOKIE['crear'])."</p>";
    }
    if(isset($_GET['eliminado']) && $_GET['eliminado'] == 1){
        setcookie("crear");
        print "<p>Cookie eliminada</p>";
    }

?>

</body>
</html>