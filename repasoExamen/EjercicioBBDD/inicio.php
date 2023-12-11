<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $conexion = mysqli_connect("localhost","root","") or die("ERROR: NO SE HA PODIDO CONECTAR A LA BBDD");

        mysqli_query($conexion,"create database if not exists alumnos") or die("NO SE HA PODIDO CREAR LA bbdd ALUMNOS");

        mysqli_query($conexion,"use alumnos") or die("NO SE PUEDE USAR LA BBDD");

        $contadorTablas = mysqli_query($conexion,"show tables like 't_cursos'");

        if(mysqli_num_rows($contadorTablas)==0){
        mysqli_query($conexion,"create table t_cursos(
            id int auto_increment not null,
            nombre varchar(100),
            primary key(id)
            )") or die("NO SE HA CREADO EL CURSO");
        }

            mysqli_query($conexion,"insert into t_cursos(nombre)
            values ('primero')") or die("No se puede insertar");

            $consulta = mysqli_query($conexion,"select * from t_cursos");

            while($columna = mysqli_fetch_array($consulta)){
                print "id: ".$columna['id']." nombre: ".$columna['nombre']."<br>";
            }
    ?>
</body>
</html>