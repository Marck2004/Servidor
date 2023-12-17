<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    } else {
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
        <h1>BASES DE DATOS BLOQUE 2</h1>
    </div>
    <div class="cuerpo">
        <ul>
            
            <li><a href="insertar_1.php">Añadir registros</a></li>
            <li><a href="listar.php">Listado </a></li>
            <li><a href="borrar_1.php">Borrar</a></li>
           
        </ul>
    </div>
</body>
</html>
<?php
}
?>