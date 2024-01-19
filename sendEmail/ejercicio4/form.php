<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="envio.php" method="post" enctype="multipart/form-data">
        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
        <p>email: <input type="text" name="email" id="email"></p>
        <p>Mensaje: <textarea name="mensaje" cols="30" rows="10"></textarea></p>
        <p>Fichero adjunto: <input type="file" name="fichero" id="fichero"></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>