<?php
    session_start();

    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    }

    include 'funciones.php';

    $conn = conectarPrimero();

    $sql1 = 'CREATE DATABASE IF NOT EXISTS datos_empleados';
    $sql2 = 'USE datos_empleados';
	$sql3='CREATE TABLE IF NOT EXISTS usuario (
        user VARCHAR(20) NOT NULL,
        pass  VARCHAR(20) NOT NULL,
	    email  VARCHAR(20) NOT NULL,
        PRIMARY KEY (user)
    )';
	$sql4 = 'CREATE TABLE IF NOT EXISTS personas (
        Id INT NOT NULL AUTO_INCREMENT,
        Nombre VARCHAR(20) NOT NULL,
        Apellido VARCHAR(20) NOT NULL,
        PRIMARY KEY (Id)
    )';
    
    sentenciasBBDD($conn, $sql1);
    sentenciasBBDD($conn, $sql2);
    sentenciasBBDD($conn, $sql3);
	sentenciasBBDD($conn, $sql4);
	$sql5='select * from usuario';
	$resultado=sentenciasBBDD($conn, $sql5);
	$sql6="insert into usuarios values('User1', 'admin1', 'user1@gmail.com'),
										(User2, admin2, user2@gmail.com)";
	if (mysqli_num_rows($resultado)== null){sentenciasBBDD($conn, $sql6); }
		

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="cabecera">
        <h1>BASES DE DATOS CONECTAR</h1>
    </div>
    <div class="cuerpo">
        <ul>
            <li><a href="main.php">Página Principal</a></li>
        </ul>
    </div>
    <div class="campos">
        <p>Se ha conectado con la BBDD</p>
    </div>
</body>
</html>