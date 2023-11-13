<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acreditacion</title>
</head>
<body>

    <h1>Formulario de autenticacion</h1>
    
    <p>Aun no se ha autenticado rellene el formulario</p>

    <p>Introduce tu nombre de usuario y contraseña</p>

    <?php 
    if(isset($_REQUEST['enviar'])){
    if($_REQUEST['nombre'] == "usuario" || $_REQUEST['contraseña'] == 123){
        header('location:aplicacion.php');
    }
}
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <p>Nombre de usuario: <input type="text" name="nombre" id="nombre"></p>
        <?php 
        if(isset($_REQUEST['enviar'])){
        if(empty($_REQUEST['nombre']) || $_REQUEST['nombre'] != "usuario"){
            print "<p style='color:red;'>Nombre introducido incorrecto</p>";
        }
    }
        ?>
        <p>Contraseña: <input type="password" name="contraseña" id="contraseña"></p>
        <?php
        if(isset($_REQUEST['enviar'])){
    if(empty($_REQUEST['contraseña']) || $_REQUEST['contraseña'] != 123){
        print "<p style='color:red;'>Contraseña introducida incorrecta</p>";
    }
}
        ?>
    <input type="submit" value="Inicio de sesion" name="enviar">
    </form>
    <p>Para ENTRAR, debes INTRODUCIR <b>usuario</b> en el primer campo
    y <b>123</b> en el segunda</p>
</body>
</html>