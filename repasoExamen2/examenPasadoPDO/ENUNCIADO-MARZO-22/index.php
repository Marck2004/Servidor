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
        $conexion = conectarServidor();
        try{
        $conexion->query("create database if not exists marzo");
        $conexion->query("use marzo");
        
        $conexion->query("create table if not exists User(
            username varchar(100),
            passwd varchar(100) not null,
            email varchar(100) not null
        )");
        $conexion->query("delete from User");

        $conexion->query("insert into User 
            values ('User1','admin1','user1@gmail.com')");
        $conexion->query("insert into User 
            values ('User2','admin2','user2@gmail.com')");
        $conexion->query("insert into User 
            values ('User3','admin3','user3@gmail.com')");

        }catch(PDOException $e){
            print $e->getMessage();
        }
    ?>
    <form action="validar.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nomrbe"></p>
        <p>Clave: <input type="password" name="clave" id="clave"></p>
        <input type="submit" value="enviar" name="enviar">
    </form>
    <?php
        if(isset($_GET["error"]) && $_GET["error"] == 1){
            print "<p class='error'>Introduzca nombre y contraseña</p>";
        }
    ?>
</body>
</html>