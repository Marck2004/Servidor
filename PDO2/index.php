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
    <?php
        include("funciones.php");

        $conexion = conexionServidor();
        try{

        $conexion->query("create database if not exists Matricula");
        $conexion->query("use Matricula");
        $conexion->query("create table if not exists usuarios(
            id int auto_increment,
            Nombre varchar(100),
            clave varchar(100),
            primary key(id)
        )");
        $conexion->query("create table if not exists matriculas(
            dni varchar(100) not null,
            nombre varchar(100) not null,
            apellidos varchar(200) not null,
            direccion varchar(200),
            telefono varchar(100) not null,
            foto varchar(256),
            primary key(dni)
        )");
            $conexion ->query("delete from usuarios");

            $conexion->query("insert into usuarios(Nombre,clave)
            values ('user1','admin1')");
            $conexion->query("insert into usuarios(Nombre,clave)
            values ('user2','admin2')");
            $conexion->query("insert into usuarios(Nombre,clave)
            values ('user3','admin3')");

    }catch(PDOException $e){
        print $e->getMessage();
    }
    ?>
    <form action="validar.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nombre"></p>
        <?php
            if(isset($_REQUEST["errorNombre"]) && $_REQUEST["errorNombre"] == 1){
                print "<p class='error'>Campo vacio</p>";
            }
        ?>
        <p>clave: <input type="text" name="clave" id="clave"></p>
        <?php
            if(isset($_REQUEST["errorApellido"]) && $_REQUEST["errorApellido"] == 1){
                print "<p class='error'>Campo vacio</p>";
            }
        ?>
        <p><input type="submit" value="enviar" name="enviar"></p>
    </form>
    <?php
        if(isset($_REQUEST["error"]) && $_REQUEST["error"] == 1){
            print "<p class='error'>Campos no validos</p>";
        }
        if(isset($_REQUEST["sesion"]) && $_REQUEST["sesion"] == 1){
            print "<p class='error'>Error en la sesion</p>";
        }
    ?>
</body>
</html>