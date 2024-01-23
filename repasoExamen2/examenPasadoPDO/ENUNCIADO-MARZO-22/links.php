<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        session_start();

        if(isset($_SESSION["usuario"])){

    ?>
<h1>GESTION DE VIVIENDAS</h1>

<ul>
    <li><a href='formInsertar.php'>Insercion</a></li>
    <li><a href='formBorrado.php'>Borrado</a></li>
    <li><a href='listar.php'>Consulta</a></li>
</ul>

<p>[ <a href='index.php'>Desconectar</a> ]</p>
<?php
}else{
    header("location:index.php?error=1");
}
?>
</body>
</html>