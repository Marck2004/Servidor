<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
</head>
<body>
    
    <?php

            try {
                $conexion = new PDO("mysql:host=localhost;dbname=datos_empleados;charset=utf8","root","");

                $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                

            } catch (PDOException $e) {
                print "<p>Error no se puede conectar con la bbdd por ".$e->getMessage()."</p>";
            }

    ?>

    <form action="validar.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nombre"></p>
        <p>Contraseña: <input type="password" name="clave" id="clave"></p>
        <input type="submit" value="enviar" name="enviar">
        <?php
            if(isset($_GET['error']) && $_GET['error'] == 1){
                print "<p style='color:red'>DATOS INCORRECTOS</p>";
            }
        ?>
    </form>

</body>
</html>