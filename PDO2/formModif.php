<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .marcar{
            color:red;
        }
    </style>
</head>
<body>
    <?php
    include("funciones.php");
    session_start();
        if($_SESSION["usuario"]){

            $dni = sanear("dni");
            $nombre = sanear("nombre");
            $apellidos = sanear("apellidos");
            $direccion = sanear("direccion");
            $telefono = sanear("telefono");

    ?>

    <form action="modificar.php" method="post" enctype="multipart/form-data">
        <p>DNI:<span class='marcar'>*</span> <input type="text" name="dni" id="dni" value='<?php echo $dni ?>'</p>
            <?php
                if(isset($_GET['errorDni']) && $_GET["errorDni"] == 1){
                    print "<p class='marcar'>Campo no valido</p>";
                }
            ?>
        <p>Nombre:<span class='marcar'>*</span> <input type="text" name="nombre" id="nombre" value='<?php echo $nombre ?>'></p>
            <?php
                if(isset($_GET['errorNombre']) && $_GET["errorNombre"] == 1){
                    print "<p class='marcar'>Campo no valido</p>";
                }
            ?>
        <p>Apellidos:<span class='marcar'>*</span> <input type="text" name="apellidos" id="apellidos" value='<?php echo $apellidos ?>'></p>
            <?php
                if(isset($_GET['errorApellido']) && $_GET["errorApellido"] == 1){
                    print "<p class='marcar'>Campo no valido</p>";
                }
            ?>
        <p>Direccion: <input type="text" name="direccion" id="direccion" value='<?php echo $direccion ?>'></p>
            <?php
                if(isset($_GET['errorDireccion']) && $_GET["errorDireccion"] == 1){
                    print "<p class='marcar'>Campo no valido</p>";
                }
            ?>
        <p>Telefono:<span class='marcar'>*</span> <input type="text" name="telefono" id="telefono" value='<?php echo $telefono ?>'></p>
            <?php
                if(isset($_GET['errorTelefono']) && $_GET["errorTelefono"] == 1){
                    print "<p class='marcar'>Campo no valido</p>";
                }
            ?>
        <p>Foto: <input type="file" name="foto" id="foto" value='<?php echo $_REQUEST['foto'] ?>'></p>

        <p><input type="submit" value="Insertar" name="enviar"><input type="reset" value="Borrar" name="cancelar"></p>
    </form>
    <?php

        }else{
            manejarError("No existe la sesion");
            header("location:index.php?sesion=1");
        } 
    
    ?>
</body>
</html>