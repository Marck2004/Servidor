<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="envio.php" method="post">
        <p>Nombre: <input type="text" name="nombre" id="nombre">
        Email: <input type="text" name="Email" id="Email"></p>
        <p>Mensaje: <br> <textarea name="mensaje" id="mensaje" cols="30" rows="10"></textarea></p>
        <p><input type="submit" value="enviar" name="enviar"></p>
    </form>
    <?php
        if(isset($_GET["error"]) && $_GET["error"] == 1){
            print "<p style='color:red;'>No ha sido ejecutado</p>";
        }
    ?>
</body>
</html>