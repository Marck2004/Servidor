<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prueba.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="102400" />
    <p><input type="file" name="archivo" id="archivo"></p>
    <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>