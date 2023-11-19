<?php

            if(isset($_REQUEST['enviar'])){

                $conexion = mysqli_connect("localhost","root","","datos_empleados");
                
                $selectUser = mysqli_query($conexion,"select * from usuario where user ='".$_REQUEST['nombre']."'");
                $selectClave = mysqli_query($conexion,"select * from usuario where pass = '".$_REQUEST['clave']."'");

                if(mysqli_num_rows($selectUser) == 0 || mysqli_num_rows($selectClave) == 0){
                    if(mysqli_num_rows($selectUser) == 0){
                        $errorUser = "user=1&";
                    }
                    if(mysqli_num_rows($selectClave) == 0){
                        $errorClave = "clave=1";
                    }
                    header('location:index.php?'.$errorUser.$errorClave);
                }else{
                    session_start();

                        $_SESSION['usuario'] = mysqli_num_rows($selectUser);
                        $_SESSION['clave'] = mysqli_num_rows($selectClave);

                    print "<ul>";
                        print "<li><a href='mostrarEmpleados.php'>Lista de empleados</a></li>";
                        print "<li><a href='agregarDatos.php'>Agregar datos</a></li>";
                        print "<li><a href='borrar.php'>Borrar datos</a></li>";
                    print "</ul>";
                }
            }else{

                session_start();

            if($_SESSION['usuario'] != 1 || $_SESSION['clave'] != 1){
                header('location:index.php?user=1&clave=1');
            }else{
                print "<ul>";
                        print "<li><a href='mostrarEmpleados.php'>Lista de empleados</a></li>";
                        print "<li><a href='agregarDatos.php'>Agregar datos</a></li>";
                        print "<li><a href='borrar.php'>Borrar datos</a></li>";
                    print "</ul>";
                }
            }

    ?>