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
        $conn = conectarServidor();

        try{
        $conn->query("create database if not exists marzo3");
        $conn->query("use marzo3");
        $conn->query("create table if not exists User(
            username varchar(100) primary key,
            passwd varchar(100) not null,
            email varchar(100) not null
        )");    

        $stmt=$conn->query("select * from User");

        if($stmt->rowCount() == 0){
            $conn->query("insert into User values ('User1','admin1','user1@gmail.com')");
            $conn->query("insert into User values ('User2','admin2','user2@gmail.com')");
            $conn->query("insert into User values ('User3','admin3','user3@gmail.com')");
        }
        }catch(PDOException $e){
            print $e->getMessage();
        }
    ?>
        <p>Esta zona tiene el acceso restringido.</p>
        <p>Para entrar debe autenticarse</p>
    <form action="validar.php" method="post">
        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
        <p>Clave: <input type="text" name="clave" id="clave"></p>
        <input type="submit" value="Entrar" name="enviar">
    </form>
    <?php
        if(isset($_GET["error"]) && $_GET["error"] == 1){
            manejarError("Credenciales incorrectas");
            print "<p class='error'>Credenciales incorrectas</p>";
        }
    ?>
</body>
</html>