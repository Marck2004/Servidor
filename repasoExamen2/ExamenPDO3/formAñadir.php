<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <?php
        include("funciones.php");
        manejarSesion();
    ?>
    <form action="campos.php" method="post">
        <p>Nombre campo: <input type="text" name="nombre" id="nombre"></p>
        <?php
            if(isset($_GET["errorNombre"]) && $_GET["errorNombre"] == 1){
                manejarError("El campo nombre en la insercion de un nuevo campo esta vacio");
                print "<p class='error'>El campo nombre en la insercion de un nuevo campo esta vacio</p>";
            }
        ?>
        <p>Tipo dato: <input type="text" name="tipo" id="tipo"></p>
        <?php
            if(isset($_GET["errorTipo"]) && $_GET["errorTipo"] == 1){
                manejarError("El campo tipo en la insercion de un nuevo campo esta vacio");
                print "<p class='error'>El campo tipo en la insercion de un nuevo campo esta vacio</p>";
            }
        ?>
        <input type="submit" value="Añadir" name="enviar">
    </form>
</body>
</html>