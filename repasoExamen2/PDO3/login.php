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
    <form action="validar.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nombre"></p>
        <p>Clave: <input type="text" name="clave" id="clave"></p>
        <input type="submit" value="Iniciar sesion" name="enviar">
    </form>
    <?php
    include("funciones.php");
        if(isset($_GET["error"]) && $_GET["error"] == 1){
            capturarError("Credenciales incorrectas");
            print "<p class='error'>Credenciales incorrectas</p>";
        }
    ?>
</body>
</html>