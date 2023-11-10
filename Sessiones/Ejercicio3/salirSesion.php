<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FINALIZAR LA SESION</h1>

    <p>---------------</p>

    <?php

        session_start();
        print "<p>Identificador de la sesion:[".session_id()."]</p>";
        print "<p>Nombre de la sesion: [".session_name()."]</p>";
        if(session_unset()){
        print "<p>La variable de sesion autenticado ya no esta definida</p>";
    }
    if(session_destroy()){
        print "<p>Sesion finalizada correctamente</p>";
    }
    ?>
    <p><a href="comprobarSession.php">Comprobar los valores en otra pagina(no se mostrara nada por haber finalizado la sesion)</a></p>
    <p><a href="acreditacion.php">Ir a la pagina principal</a></p>
    <p>Ahora estas fuera de la aplicacion segura</p>
</body>
</html>