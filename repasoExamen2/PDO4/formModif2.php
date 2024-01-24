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
        $conn = conectarBBDD("Matricula2");
        $stmt = $conn->query("select * from matriculas");
        $stmt = $stmt->fetch(PDO::FETCH_ASSOC);

    ?>

    <form action="modificar.php" method="post" enctype="multipart/form-data">
    <p>DNI: <input type="text" name="dni" id="dni" value="<?php echo $stmt['dni'] ?>"></p>
    <?php
            if(isset($_GET["errorDni"]) && $_GET["errorDni"] == 1){
                manejarError("Campo dni vacio");
            print "<p class='error'>Campo dni vacio</p>";
            }
        ?>
        <p>Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $stmt['nombre'] ?>"></p>
        <?php
            if(isset($_GET["errorNombre"]) && $_GET["errorNombre"] == 1){
                manejarError("Campo nombre invalido");
            print "<p class='error'>Campo nombre invalido</p>";
            }
        ?>
        <p>Apellidos: <input type="text" name="apellido" id="apellido" value="<?php echo $stmt['apellido'] ?>"></p>
        <?php
            if(isset($_GET["errorApellido"]) && $_GET["errorApellido"] == 1){
                manejarError("Campo apellido invalido");
            print "<p class='error'>Campo apellido invalido</p>";
            }
        ?>
        <p>Direccion: <input type="text" name="direccion" id="direccion" value="<?php echo $stmt['direccion'] ?>"></p>
        <?php
            if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
                manejarError("Campo direccion invalido");
            print "<p class='error'>Campo direccion invalido</p>";
            }
        ?>
        <p>Telefono: <input type="text" name="telefono" id="telefono" value="<?php echo $stmt['telefono'] ?>"></p>
        
        <?php
            if(isset($_GET["errorTelefono"]) && $_GET["errorTelefono"] == 1){
                manejarError("Campo telefono invalido");
            print "<p class='error'>Campo telefono invalido</p>";
            }
        ?>
        <input type="hidden" name="oculto" value="<?php echo $_POST["modif"] ?>">
        <p><input type="submit" value="Insertar" name="enviar"><input type="reset" value="cancelar"></p>
    </form>
    <p><a href="links.php">Volver al menu</a></p>
</body>
</html>