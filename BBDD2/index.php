<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>
<body>
    <h1>Base de Datos Bloque 2</h1>

    <p><a href="index.php?crear=1">Conectar,crear BD y tabla</a><a href="insertar.php">&nbsp&nbsp Añadir registros</a>
    <a href="">&nbsp&nbsp Listado alfabetico y por localidad</a><a href="">&nbsp&nbsp Buscar</a></p>
    <p><a href="">Modificar</a><a href="">&nbsp&nbsp Borrar</a><a href="">&nbsp&nbsp Borrar todo</a></p>

    <?php
    
        if(isset($_REQUEST['crear']) && $_REQUEST['crear']=1){
            $conectar = mysqli_connect("localhost","root","");

            mysqli_query($conectar,"create database if not exists listados")
            or die ("ERROR: NO SE HA PODIDO CREAR LA BBDD");

            mysqli_query($conectar,"use listados") or die("ERROR: NO SE PUEDE USAR");

            $conteo_tabla = mysqli_query($conectar,"show tables like 'alumno'") or die("no se muestra");

            session_start();
                $_SESSION['resultado'] = mysqli_num_rows($conteo_tabla);

                if($_SESSION['resultado'] == 0){
            mysqli_query($conectar,"create table alumno(
                id int auto_increment not null,
                nombre varchar(100) not null,
                apellido varchar(100) not null,
                primary key(id))") or die ("ERROR:NO SE PUEDE CREAR LA TABLA");
                print "se crea";

            }

                
        }

    ?>
</body>
</html>