<link rel="stylesheet" href="style.css">
<?php

    session_start();

    print "<a href='index.php'>Pagina principal</a>";
        if(isset($_REQUEST['enviar'])){
            if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
                header("location:index.php");
            }else{
                $nombre = htmlspecialchars(trim(strip_tags($_REQUEST['nombre'])),ENT_QUOTES,'utf-8');
                $apellidos = htmlspecialchars(trim(strip_tags($_REQUEST['apellidos'])),ENT_QUOTES,'utf-8');

                if(empty($nombre) || !preg_match('/^[A-Za-z\s]+$/',$nombre) || empty($apellidos) || !preg_match('/^[A-Za-z\s]+$/',$apellidos)){
                    if(empty($nombre) || !preg_match('/^[A-Za-z\s]+$/',$nombre)){
                        $errorNombre = 'errorNombre=1&';
                    }
                    if(empty($apellidos) || !preg_match('/^[A-Za-z\s]+$/',$apellidos)){
                        $errorApellido = 'errorApellido=1';
                    }
                    header("location:añadirRegistros.php?".$errorNombre.$errorApellido);
                }else{
                    $conexion = mysqli_connect("localhost","root","","repaso");

                    mysqli_query($conexion,"insert into usuario(Nombre,Apellidos)
                            values ('$nombre','$apellidos')") or die("ERROR NO SE PUEDE AÑADIR");

                    print "<p>El registro ".$nombre." ".$apellidos." ha sido insertado</p>";


                }
            }
        }
?>