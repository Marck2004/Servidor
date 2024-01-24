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
    session_start();
        if(empty($_SESSION["usuario"])){
            header("location:login.php?error=1");
        }
    ?>

    <form action="insertar.php" method="post" enctype="multipart/form-data">
    <p>DNI: <input type="text" name="dni" id="dni"></p>
    <?php
            if(isset($_GET["errorDni"]) && $_GET["errorDni"] == 1){
                manejarError("Campo dni vacio");
            print "<p class='error'>Campo dni vacio</p>";
            }
        ?>
        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
        <?php
            if(isset($_GET["errorNombre"]) && $_GET["errorNombre"] == 1){
                manejarError("Campo nombre invalido");
            print "<p class='error'>Campo nombre invalido</p>";
            }
        ?>
        <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>
        <?php
            if(isset($_GET["errorApellido"]) && $_GET["errorApellido"] == 1){
                manejarError("Campo apellido invalido");
            print "<p class='error'>Campo apellido invalido</p>";
            }
        ?>
        <p>Direccion: <input type="text" name="direccion" id="direccion"></p>
        <?php
            if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
                manejarError("Campo direccion invalido");
            print "<p class='error'>Campo direccion invalido</p>";
            }
        ?>
        <p>Telefono: <input type="text" name="telefono" id="telefono"></p>
        <?php
            if(isset($_GET["errorTelefono"]) && $_GET["errorTelefono"] == 1){
                manejarError("Campo telefono invalido");
            print "<p class='error'>Campo telefono invalido</p>";
            }
        ?>
        <p>Foto: <input type="file" name="foto" id="foto"></p>
        <?php
            if(isset($_GET["errorFoto"]) && $_GET["errorFoto"] == 1){
                manejarError("Campo foto invalido");
            print "<p class='error'>Campo foto invalido</p>";
            }
            if(isset($_GET["errorExtension"]) && $_GET["errorExtension"] == 1){
                manejarError("Extension no valida");
            print "<p class='error'>Extension no valida</p>";
            }
        ?>
        
        <p><input type="submit" value="Insertar" name="enviar"><input type="reset" value="cancelar"></p>
    </form>
    <p><a href="links.php">Volver al menu</a></p>
</body>
</html>