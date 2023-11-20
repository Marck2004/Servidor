<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php

        session_start();

            if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
                header("location:index.php");
            }else{
    ?>
    <p><a href="index.php">Pagina inicial</a></p>

    <form action="encontrado.php" method="post">
    <p>Escriba el criterio de busqueda (caracteres o numeros)</p>

    <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
    <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>

    <input type="submit" value="Buscar" name="enviar">
    <input type="reset" value="Reiniciar formulario" name="cancelar">
    </form>
    <?php
        }
    ?>
</body>
</html>