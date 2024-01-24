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

        $conn->query("create database if not exists Matricula2");

        $conn->query("use Matricula2");

        $conn->query("create table if not exists usuarios(
            nombre varchar(100),
            clave varchar(100),
            email varchar(100)
        )");

        $stmt = $conn->query("select * from usuarios");

        if($stmt->rowCount() == 0){
            $conn->query("insert into usuarios values('user1','admin1','user1@gmail.com')");
            $conn->query("insert into usuarios values('user2','admin2','user2@gmail.com')");
            $conn->query("insert into usuarios values('user3','admin3','user3@gmail.com')");
        }
    ?>
    <form action="validar.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nombre"></p>
        <p>Clave: <input type="text" name="clave" id="clave"></p>
        <?php
            if(isset($_GET["denegado"]) && $_GET["denegado"] == 1){
                manejarError("Credenciales incorrectas");
                print "<p class='error'>Credenciales incorrectas</p>";
            }
        ?>
        <input type="submit" value="enviar" name="enviar"><input type="reset" value="cancelar">
    </form>
    <?php
        if(isset($_GET["error"]) && $_GET["error"] == 1){
            manejarError("El acceso esta denegado");
            print "<p class='error'>El acceso esta denegado</p>";
        }
    ?>
</body>
</html>