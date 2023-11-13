<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Datos</title>
</head>
<body>

    <form action="mostrar.php?añadir=1" method="post">
        <p>Codigo</p>
        <input type="text" name="codigo" id="codigo">
        <?php
            if(isset($_GET['errorCodigo']) && $_GET['errorCodigo'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <p>Nombre</p>
        <input type="text" name="nombre" id="nombre">
        <?php
            if(isset($_GET['errorNombre']) && $_GET['errorNombre'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <p>Lugar de nacimiento</p>
        <input type="text" name="lugarNacimiento" id="lugarNacimiento">
        <?php
            if(isset($_GET['errorLugar']) && $_GET['errorLugar'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <p>Fecha de nacimiento</p>
        <input type="text" name="fechaNacimiento" id="fechaNacimiento">
        <?php
            if(isset($_GET['errorFecha']) && $_GET['errorFecha'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <p>Direccion</p>
        <input type="text" name="direccion" id="direccion">
        <?php
            if(isset($_GET['errorDireccion']) && $_GET['errorDireccion'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <p>Telefono</p>
        <input type="text" name="tlf" id="tlf">
        <?php
            if(isset($_GET['errorTlf']) && $_GET['errorTlf'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <p>Puesto</p>
        <input type="text" name="puesto" id="puesto">
        <?php
            if(isset($_GET['errorPuesto']) && $_GET['errorPuesto'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <p>Estado</p>
        <select name="estado" id="estado">
            <option value="contratado">contratado</option>
            <option value="outsorcing">outsorcing</option>
            <option value="fijo">fijo</option>
        </select>
        <?php
            if(isset($_GET['errorEstado']) && $_GET['errorEstado'] == 1){
                print "<p style='color:red'>Campo introducido vacio o incorrecto</p>";
            }
        ?>
        <br>
        <input type="submit" value="enviar"><input type="reset" value="cancelar">
    </form>
</body>
</html>