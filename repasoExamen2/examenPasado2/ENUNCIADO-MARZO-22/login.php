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

        $stmt = $conn->query("create database if not exists marzo2");
        $stmt = $conn->query("use marzo2");
        $stmt = $conn->query("create table if not exists User(
            username varchar(100) not null,
            passwd varchar(100) not null,
            email varchar(150) not null
        )");

        $stmt = $conn->query("select * from User");

        if($stmt->rowCount() == 0){
        $stmt = $conn->query("insert into User values('User1','admin1','user1@gmail.com')");
        $stmt = $conn->query("insert into User values('User2','admin2','user2@gmail.com')");
        $stmt = $conn->query("insert into User values('User3','admin3','user3@gmail.com')");
        }

    ?>

    <form action="validar.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nombre"></p>
        <p>Clave: <input type="text" name="clave" id="clave"></p>
        <input type="submit" value="entrar" name="enviar">
    </form> 
        <?php
            if(isset($_GET["error"]) && $_GET["error"] == 1){
                captarErrores("Campos erroneos");
                print "<p class='error'>Campos erroneos</p>";
            }
        ?>
</body>
</html>