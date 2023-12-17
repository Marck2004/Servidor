<?php
session_start();

    $conexion = mysqli_connect("localhost","root","");

        mysqli_query($conexion,"create database if not exists prueba");

        mysqli_query($conexion,"use prueba");

        mysqli_query($conexion,"create table if not exists clientesUsuarios(
            id int auto_increment,
            Nombre varchar(100) not null,
            clave varchar(100) not null,
            primary key(id))") or die("ERROR:NO PUEDE CREAR LA TABLA");

            mysqli_query($conexion,"insert into clientesUsuarios (Nombre,clave)
                values ('".$_COOKIE['usuario']."','".$_COOKIE['clave']."')") or die("ERROR ");

            $select = mysqli_query($conexion,"select * from clientesUsuarios");

            while($columna = mysqli_fetch_array($select)){
                print $columna['Nombre'].$columna['clave'];
            }

?>