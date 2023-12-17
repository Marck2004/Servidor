<?php
    session_start();

    include 'funciones.php';
    
    if (!isset($_SESSION['login'])) {
        header('location: login.php');
    } elseif (!isset($_POST['enviarCampo'])) {
        header('location: insertar_1.php');
    }

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
        <h1>BASES DE DATOS BLOQUE 2-1 AÑADIR 2</h1>
    </div>
    <div class="cuerpo">
        <ul>
            <li><a href="main.php">Página Principal</a></li>
        </ul>
    </div>
    <div class="campos">
        <?php
            if ($_POST['nombre'] == '' && $_POST['lugar'] == '') {
                echo '<p> Hay que rellenar al menos estos campos. No se ha guardado el registro.</p>';
            } else {
                 print '1<br>'.$nombre = validarTexto($_POST['nombre']);
				 print '2<br>'.$lugar=validarTexto($_POST['lugar']);
				 print '3<br>'.$fecha=$_POST['fecha'];
				 print '4<br>'.$direccion=$_POST['direccion'];
				 print '5<br>'.$telefono=$_POST['telefono'];
				 print '6<br>'.$puesto=validarTexto($_POST['puesto']);
				if ($nombre!='' and $lugar!=''and $fecha!=''and $direccion!=''and $telefono!='' and $puesto!='')
				{
                $db = conectarDDBB('datos_empleados');
				
                $sql = 'select * from personas where nombre = "'.$nombre.'"' .'and direccion= "'.$direccion.'"';
                $resultado = consultarRegistro($db, $sql);
                if (mysqli_num_rows($resultado) == 1) {
                    echo '<p> El registro ya existe.</p>';
                } else {
                    $var1=insertarDatos($db, $nombre,$lugar,$fecha,$direccion,$telefono,$puesto) or die('no se inserta');
                   echo'<p>Registro <b>'.$_POST['nombre'].'</b> creado correctamente</p>';              
                }
				}else print 'datos incorrectos';
            }
        ?>
    </div>
</body>
</html>