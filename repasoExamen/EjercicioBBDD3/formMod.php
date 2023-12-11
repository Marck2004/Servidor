<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p><a href="index.php">Pagina inicial</a></p>

    <form action="actualizarRegistro.php" method="post">
    <p>Modifique los campos que desee</p>
    <input type="hidden" name="escondido" value="<?php echo $_REQUEST['actualizar'] ?>">
    <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
    <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>

    <input type="submit" value="Buscar" name="enviar">
    <input type="reset" value="Reiniciar formulario" name="cancelar">
    </form>
</body>
</html>