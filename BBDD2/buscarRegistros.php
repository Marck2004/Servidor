<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Escriba el criterio de busqueda (caracteres o numeros)</p>

    <form action="registrosEncontrados.php" method="post">
    <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
    <p>Apellidos: <input type="text" name="apellidos" id="apellidos"></p>
    <p><input type="submit" value="Buscar"><input type="reset" value="Reiniciar Formulario"></p>
    </form>
</body>
</html>