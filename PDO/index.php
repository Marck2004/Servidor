<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        try{
        $conexion = new PDO("mysql:host=localhost;dbname=listados",'root','');

        $conexion -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $resultado = $conexion ->query("insert into alumno(nombre,apellido)
            values ('Marcos','Marcos')");

        $consulta = $conexion -> query("select * from alumno");

            foreach($consulta as $registro){
                print "<p>". $registro['nombre']." - ".$registro['apellido'] ."</p>";
            }
    }catch(PDOException $e){
        print "<p>Error no se puede conectar con la BBDD por \n ".$e->getMessage()."</p>";
    }
    ?>

    <form action="" method="post">
        <p>Usuario <input type="text" name="nombre" id="nombre"></p>
        <p>Password <input type="text" name="clave" id="clave"></p>
        <input type="submit" value="Iniciar Sesion" name="enviar">
    </form>

</body>
</html>