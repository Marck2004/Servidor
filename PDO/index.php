<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>

</head>
<body>
    
    <?php
        include("funciones.php");
        try{
        $conexion = conectarBBDD("datos_empleados");
    }catch(PDOException $e){
        print "<p>Error no se puede conectar con la BBDD por \n ".$e->getMessage()."</p>";
    }
    ?>

    <form action="validar.php" method="post">
        <p>Usuario <input type="text" name="nombre" id="nombre"></p>

        <p>Password <input type="text" name="clave" id="clave"></p>
        <?php
            if(isset($_GET['error']) && $_GET['error']==1){
                print "<p style='color:red;'>DATOS INCORRECTOS</p>";
            }
        ?>
        <input type="submit" value="Iniciar Sesion" name="enviar">
    </form>

</body>
</html>