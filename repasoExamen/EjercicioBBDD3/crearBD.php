<link rel="stylesheet" href="style.css">
<?php
    session_start();

    print "<a href='index.php'>Pagina inicial</a>";

    $conexion = mysqli_connect("localhost","root","");

        mysqli_query($conexion,"create database if not exists repaso") or die("ERROR NO SE CREO");

        mysqli_query($conexion,"use repaso") or die("ERROR NO SE PUEDE USAR" .mysqi_error($conexion));

        $_SESSION['contador'] = mysqli_query($conexion,"show tables like 'usuario'");
        

        if(mysqli_num_rows($_SESSION['contador']) == "0"){
            mysqli_query($conexion,"create table usuario(
                id int auto_increment,
                Nombre varchar(100) not null,
                Apellidos varchar(100) not null,
                primary key (id))") or die("ERROR NO SE PUEDE CREAR");

            print "<p>La tabla ha sido creada</p><br>";

            mysqli_query($conexion,"insert into usuario(Nombre,Apellidos)
                values ('Cristina','Maestro')");
                print "<p>La insercion ha sido un exito</p>";

                mysqli_query($conexion,"insert into usuario(Nombre,Apellidos)
                values ('Marcos','Cobo')");
                print "<p>La insercion ha sido un exito</p>";

                mysqli_query($conexion,"insert into usuario(Nombre,Apellidos)
                values ('Mario','Vazquez')");
                print "<p>La insercion ha sido un exito</p>";
        }

        $select = mysqli_query($conexion,"select * from usuario") or die("NO SE MUESTRA");

        print "<table style='border 2px solid black;'>";
            print "<th style='border:2px solid black;'><b>id</b></th>";
            print "<th style='border:2px solid black;'><b>Nombre</b></th>";
            print "<th style='border:2px solid black;'><b>Apellidos</b></th>";
            while($columna = mysqli_fetch_array($select)){
                print "<tr style='border: 2px solid black;'>";
                    print "<td style='border: 2px solid black;'>".$columna['id']."</td>";
                    print "<td style='border: 2px solid black;'>".$columna['Nombre']."</td>";
                    print "<td style='border: 2px solid black;'>".$columna['Apellidos']."</td>";
                print "</tr>";
                }
            print "</table>";

            
?>