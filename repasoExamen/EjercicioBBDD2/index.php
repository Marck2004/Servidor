<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    
        <?php
            
            $conexion = mysqli_connect("localhost","root","") or die("ERROR:NO SE PUDO CONECTAR");

                mysqli_query($conexion,"create database if not exists datos_empleados") or die("ERROR: NO SE PUDO CREAR LA BBDD");

                mysqli_query($conexion,"use datos_empleados");

                $conteoTablas = mysqli_query($conexion,"show tables like 'usuario'");

                if(mysqli_num_rows($conteoTablas) == 0){
                mysqli_query($conexion,"create table usuario(
                    user varchar(100),
                    pass varchar(100) not null,
                    mail varchar(100) not null,
                    primary key(user))") or die("ERROR NO SE CREO LA TABLA USUARIO");
                

                mysqli_query($conexion,"insert into usuario(user,pass,mail)
                    values ('user1','admin1','user1@gmail.com')") or die("ERROR USUARIO 1");

                    mysqli_query($conexion,"insert into usuario(user,pass,mail)
                    values ('user2','admin2','user2@gmail.com')") or die("ERROR USUARIO 2");

                    mysqli_query($conexion,"insert into usuario(user,pass,mail)
                    values ('user3','admin3','user3@gmail.com')") or die("ERROR USUARIO 3");
                }

                $contarTablaEmpleados = mysqli_query($conexion,"show tables like 'empleados'");

                    if(mysqli_num_rows($contarTablaEmpleados) == 0){
                        mysqli_query($conexion,"create table empleados(
                            codigo int auto_increment,
                            nombres varchar(100) not null,
                            lugar_nacimiento varchar(100) not null,
                            fecha_nacimiento varchar(100) not null,
                            direccion varchar(100) not null,
                            telefono varchar(100) not null,
                            puesto varchar(100) not null,
                            primary key(codigo))") or die("ERROR CREACION TABLA EMPLEADOS");
                    }
                    
        ?>

    <h1><b>AUTENTICACION</b></h1>

    <form action="opciones.php" method="post">
        <p>Usuario: <input type="text" name="nombre" id="nombre"></p>
                    <?php
                        if(isset($_GET['user']) && $_GET['user'] == 1){
                            print "<p style='color:red;'>Usuario incorrecto</p>";
                        }
                    ?>
        <p>Password: <input type="password" name="clave" id="clave"></p>
        <?php
                        if(isset($_GET['clave']) && $_GET['clave'] == 1){
                            print "<p style='color:red;'>clave incorrecta</p>";
                        }
                    ?>
        <p><input type="submit" value="Iniciar Sesion" name="enviar"></p>
    </form>

    
</body>
</html>