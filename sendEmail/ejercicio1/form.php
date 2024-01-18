<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <form action="ej1.php" method="post">
        <p>Nombre: <input type="text" name="nombre" ></p>
        <?php
            if(isset($_GET["errorNombre"]) && $_GET["errorNombre"] == 1){
                print "<p class='error'>La cadena esta vacia</p>";
            }
        ?>
        <p>Apellidos: <input type="text" name="Apellidos" ></p>
        <?php
            if(isset($_GET["errorApellido"]) && $_GET["errorApellido"] == 1){
                print "<p class='error'>La cadena esta vacia</p>";
            }
        ?>
        <p>Email: <input type="text" name="Email" ></p>
        <?php
            if(isset($_GET["errorEmail"]) && $_GET["errorEmail"] == 1){
                print "<p class='error'>La cadena esta vacia</p>";
            }
        ?>
        <p>Asunto: <input type="text" name="Asunto" ></p>
        <?php
            if(isset($_GET["errorAsunto"]) && $_GET["errorAsunto"] == 1){
                print "<p class='error'>La cadena esta vacia</p>";
            }
        ?>
        <p>Mensaje: <textarea name="mensaje" cols="30" rows="10">
        </textarea></p>
        <?php
            if(isset($_GET["errorMensaje"]) && $_GET["errorMensaje"] == 1){
                print "<p class='error'>La cadena esta vacia</p>";
            }
        ?>
        <input type="submit" value="enviar" name="enviar">
    </form>

</body>
</html>