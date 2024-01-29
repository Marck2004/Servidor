<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include("funciones.php");
        manejarSesion();

        $conn = conectarBBDD("Matriculas3");
        $stmt=$conn->prepare("select * from matriculas where dni = ?");
        $stmt->execute([$_POST["modificar"]]);
        $stmt=$stmt->fetch(PDO::FETCH_ASSOC);
    ?>
    <form action="modificar.php" method="post" enctype="multipart/form-data">
    <p>DNI: <input type="text" name="dni" id="dni" value="<?php echo $stmt['dni'] ?>"></p>
        <?php
            if(isset($_GET["errorDni"]) && $_GET["errorDni"] == 1){
                manejarError("El campo dni esta vacio");
                print "<p class='error'>El campo dni esta vacio</p>";
            }
        ?>
        <p>Nombre: <input type="text" name="nombre" id="nombre" value="<?php echo $stmt['nombre'] ?>"></p>
        <?php
            if(isset($_GET["errorNombre"]) && $_GET["errorNombre"] == 1){
                manejarError("El campo nombre esta vacio");
                print "<p class='error'>El campo nombre esta vacio</p>";
            }
        ?>
        <p>apellido: <input type="text" name="apellido" id="apellido" value="<?php echo $stmt['apellidos'] ?>"></p>
        <?php
            if(isset($_GET["errorApellido"]) && $_GET["errorApellido"] == 1){
                manejarError("El campo apellido esta vacio");
                print "<p class='error'>El campo apellido esta vacio</p>";
            }
        ?>
        <p>direccion: <input type="text" name="direccion" id="direccion" value="<?php echo $stmt['direccion'] ?>"</p>
        <?php
            if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
                manejarError("El campo direccion esta vacio");
                print "<p class='error'>El campo direccion esta vacio</p>";
            }
        ?>
        <p>telefono: <input type="text" name="telefono" id="telefono" value="<?php echo $stmt['telefono'] ?>"></p>
        <?php
            if(isset($_GET["errorTelefono"]) && $_GET["errorTelefono"] == 1){
                manejarError("El campo telefono esta vacio");
                print "<p class='error'>El campo telefono esta vacio</p>";
            }
        ?>
        <p>foto: <input type="file" name="foto" id="foto"></p>
        <?php
            if(isset($_GET["errorFoto"]) && $_GET["errorFoto"] == 1){
                manejarError("El campo foto esta vacio");
                print "<p class='error'>El campo foto esta vacio</p>";
            }
            if(isset($_GET["errorTipo"]) && $_GET["errorTipo"] == 1){
                manejarError("El campo foto no concuerda con el tipo aceptado(jpg,png)");
                print "<p class='error'>El campo foto no concuerda con el tipo aceptado(jpg,png)</p>";
            }
        ?>
        <input type="submit" value="Insertar" name="enviar">
    </form>
</body>
</html>