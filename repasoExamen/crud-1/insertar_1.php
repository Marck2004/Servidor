<?php
    session_start();

    include 'funciones.php';
    
    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    }
    
    $db = conectarDDBB('datos_empleados');
	$sql='select * from personas';
	$resultado=sentenciasBBDD($db, $sql);
    $cont = mysqli_num_rows($resultado);

    if ($cont < REGISTROS_MAX) {
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
        <h1>FORMULARIO PARA AÑADIR</h1>
    </div>
    <div class="cuerpo">
        <ul>
            <li><a href="main.php">Página Principal</a></li>
        </ul>
    </div>
    <div class="campos">
        <p>Escriba los datos del nuevo registro:</p>
        <form action="insertar_2.php" method="post">
            <p><span>Nombre: </span>
            <input type="text" name="nombre" id=""></p>
			<p><span>Lugar_Nacimiento : </span>
            <input type="text" name="lugar" id=""></p>
            <p><span>Fecha_Nacimiento : </span>
            <input type="text" name="fecha" id=""></p>
			<p><span>direccion : </span>
            <input type="text" name="direccion" id=""></p>
			<p><span>telefono: </span>
            <input type="text" name="telefono" id=""></p>
			<p><span>puesto: </span>
            <input type="text" name="puesto" id=""></p>
			
            <p>
                <input type="submit" name="enviarCampo" value="Añadir"> 
                <input type="reset" value="Reiniciar Formulario">
            </p>
            
        </form>
    </div>
</body>
</html>
<?php
    } else {
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
        <h1>AÑADIR REGISTRO</h1>
    </div>
    <div class="cuerpo">
        <ul>
            <li><a href="main.php">Página Principal</a></li>
        </ul>
    </div>
    <div class="campos">
        <p>Se ha cumplido el cupo de registros, por favor elimine alguno para insertar uno nuevo.</p>
    </div>
</body>
</html>
<?php
    }
?>


			
			