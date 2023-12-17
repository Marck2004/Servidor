<?php
    session_start();

    include 'funciones.php';
    
    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    }
    
    $db = conectarDDBB('datos_empleados');
	$sql='select * from personas';
	$resultado=sentenciasBBDD($db, $sql);
    $cont = mysqli_num_rows($resultado);
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
        <h1>BASES DE DATOS LISTADO</h1>
    </div>
    <div class="cuerpo">
        <ul>
            <li><a href="main.php">Página Principal</a></li>
        </ul>
    </div>
    <div class="campos">
        <?php
            if ($cont <= 0) {
                echo '<p>No se ha creado ningún registro</p>';
            } else {
                echo '<p>Listado completo de registros:</p>';
                mostrarTabla($db);
            }
        ?>
    </div>
</body>
</html>