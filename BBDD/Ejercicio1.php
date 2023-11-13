<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBDD</title>
</head>
<body>
    <?php

    $conexion = mysqli_connect("localhost","root","")
        or die ("No se pudo conectar con el servidor");

        mysqli_query($conexion,"create database if not exists datos_empleados")
        or die ("No se pudo crear la base de datos");

        mysqli_query($conexion,"use datos_empleados");

        mysqli_query($conexion,"create table usuario(
            usuario varchar(100) not null,
            pass varchar(100) not null,
            mail varchar(100) not null
        )");

        mysqli_query($conexion,"create table empleados(
            codigo int not null,
            nombre varchar(100) not null,
            lugar_nacimiento varchar(100) not null,
            fecha_nacimiento varchar(100) not null,
            direccion varchar(100) not null,
            telefono varchar(100) not null,
            puesto varchar(100) not null,
            primary key(codigo))"); 


            mysqli_query($conexion,"insert into usuario (usuario,pass,mail)
            values ('user1','admin1','user1@gmail.com')");
            mysqli_query($conexion,"insert into usuario(usuario,pass,mail)
            values('user2','admin2','user2@gmail.com')");
            mysqli_query($conexion,"insert into usuario(usuario,pass,mail)
            values ('user3','admin3','user3@gmail.com')");

    ?>
     <form action="validar.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nombre"></p>
        <?php
            if(isset($_GET['errorUsuario']) && $_GET['errorUsuario'] == 1){
                print "<p style='color:red;'>Nombre vacio o incorrecto</p>";
            }
        ?>
        <p>Contraseña: <input type="password" name="clave" id="clvae"></p>
        <?php
            if(isset($_GET['errorClave']) && $_GET['errorClave'] == 1){
                print "<p style='color:red;'>Clave vacia o incorrecta</p>";
            }
        ?>
        <input type="submit" value="enviar">
     </form>
     <?php
        if(isset($_GET['consultar']) && $_GET['consultar'] == 1){

            $resultado = mysqli_query($conexion,"select * from usuario");
            print "<table style='border:2px solid black'>";
            while ($columna = mysqli_fetch_array($resultado)){
    echo "<tr style='border:2px solid black'>";
    echo "<td style='border:2px solid black'>" . $columna['usuario'] . "</td>". "<td style='border:2px solid black'>".$columna['pass']."</td>".
    "<td style='border:2px solid black'>" . $columna['mail'] . "</td>";
    echo "</tr";
    print "</table>";
    }
        }
        /*if(isset($_GET['agrear']) && $_GET['agregar'] == 1){
            mysqli_query($conexion,"insert into empleados values ()");
        }*/
        ?>
</body>
</html>