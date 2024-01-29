<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <form action="comprobar.php" method="post" enctype="multipart/form-data">
    <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
    <?php
        if(isset($_GET["errorNombre"]) && $_GET["errorNombre"] == 1){
            print "<p class='error'>Error en el nombre</p>";
        }
    ?>
    <p>Edad: <input type="text" name="edad" id="edad"></p>
    <?php
        if(isset($_GET["errorEdad"]) && $_GET["errorEdad"] == 1){
            print "<p class='error'>Error en la edad</p>";
        }
    ?>
    <p>Direccion: <input type="text" name="direccion" id="direccion"></p>
    <?php
        if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
            print "<p class='error'>Error en la direccion</p>";
        }
    ?>
    <p>Telefono: <input type="text" name="telefono" id="telefono"></p>
    <?php
        if(isset($_GET["errorTelefono"]) && $_GET["errorTelefono"] == 1){
            print "<p class='error'>Error en el telefono</p>";
        }
    ?>
    <p><input type="file" name="foto" id="foto"></p>
    <?php
        if(isset($_GET["errorFoto"]) && $_GET["errorFoto"] == 1){
            print "<p class='error'>Error en la foto</p>";
        }
    ?>
    <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>