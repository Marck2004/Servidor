<?php
    session_start();

    include 'funciones.php';
    
    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    } elseif (!isset($_POST['enviarBorrar'])) {
        header('location: borrar_1.php');
    }
    
    $db = conectarDDBB('datos_empleados');
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="cabecera">
        <h1>BASES DE DATOS BORRAR</h1>
    </div>
    <div class="cuerpo">
        <ul>
            <li><a href="main.php">Página Principal</a></li>
        </ul>
    </div>
    <div class="campos">
        <?php
            if (!isset($_POST['check'])) {
                echo '<p>No se ha marcado ningún registro para borrar</p>';
            } else {
                for ($i=0; $i < count($_POST['check']); $i++) {
                   borrarId($db, $_POST['check'][$i]);
                }
                header('location: borrar_1.php');
            }
        ?>
    </div>
</body>
</html>