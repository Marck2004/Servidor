<?php

    include("funciones.php");
    session_start(); 
    if(isset($_REQUEST['enviar']) && isset($_SESSION["usuario"])){
        $dni = sanear("dni");
        $nombre = sanear("nombre");
        $apellidos = sanear("apellidos");
        $direccion = sanear("direccion");
        $telefono = sanear("telefono");

        if(preg_match('/^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ][A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s\']{1,28}[A-Za-zÁÉÍÓÚÜÑáéíóúüñ]$/u',$nombre) ||
           preg_match('/^[A-ZÁÉÍÓÚÜÑ][a-zA-ZÁÉÍÓÚÜÑáéíóúüñ\s\'-]{1,48}[a-zA-ZÁÉÍÓÚÜÑáéíóúüñ]$/u',$apellidos) ||
           preg_match('/^(calle|Plaza|avenida) [a-zA-Z0-9ÁÉÍÓÚÜÑáéíóúüñ\s\'-]+$/u',$direccion) ||
           preg_match('/^(91|6)\d{7}$/',$telefono) ||
           preg_match('/^\d{8}[A-Za-z]^/')){

            //VALIDACION FICHERO
            if(is_uploaded_file($_FILES["foto"]["tmp_name"])){

                $tiposFicherosPermitidos = array("image/jpg","image/png");

                if(in_array($_FILES["foto"]["type"], $tiposFicherosPermitidos)){
                
                    $fichero = $_FILES["foto"]["name"];

                    if(!is_dir("archivosEnviados")){
                        mkdir("archivosEnviados");
                        move_uploaded_file($_FILES["foto"]["tmp_name"],"archivosEnviados/".$fichero);
                    }else{
                        move_uploaded_file($_FILES["foto"]["tmp_name"],"archivosEnviados/".$fichero);
                    }
                
                    $conexion = conectarBBDD("Matricula");

                    $query = "insert into matriculas
                        values (?,?,?,?,?,?)";

                    $resultado = $conexion->prepare($query);

                    $resultado->execute([$dni,$nombre,$apellidos,$direccion,$telefono
                    ,$fichero]);

                    print "<p>Alta realizada con exito</p>";
                    print "<p><a href='links.php'>Volver al formulario</a></p>";

                }else{
                    print "<p style='color:red;'>Extension no permitida (jpg,png)</p>";
                }
                
            }

           }else{
            if(!preg_match('/^[A-Za-zÁÉÍÓÚÜÑáéíóúüñ][A-Za-zÁÉÍÓÚÜÑáéíóúüñ\s\']{1,28}[A-Za-zÁÉÍÓÚÜÑáéíóúüñ]$/u',$nombre)){
                $errorNombre = "errorNombre=1&";
            }
            if(!preg_match('/^[A-ZÁÉÍÓÚÜÑ][a-zA-ZÁÉÍÓÚÜÑáéíóúüñ\s\'-]{1,48}[a-zA-ZÁÉÍÓÚÜÑáéíóúüñ]$/u',$apellidos)){
                $errorApellido = "errorApellido=1&";
            }
            if(preg_match('/^(calle|Plaza|avenida) [a-zA-Z0-9ÁÉÍÓÚÜÑáéíóúüñ\s\'-]+$/u',$direccion)){
                $errorDireccion = "errorDireccion=1&";
            }
            if(preg_match('/^(91|6)\d{7}$/',$telefono)){
                $errorTelefono = "errorTelefono=1&";
            }
            if(!preg_match('/^\d{8}[A-Za-z]^/')){
                $errorDni = "errorDni=1";
            }
            header("location:formInsertar?".$errorApellido.$errorNombre.$errorDireccion.$errorTelefono.$errorDni);
           }
    }else{
        header("location:index.php?sesion=1");
    }

?>