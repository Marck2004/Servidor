<?php
    include("funciones.php");
    session_start();

    if(isset($_POST["enviar"]) || isset($_SESSION["usuario"])){
        $dni = sanear("dni");
        $nombre = sanear("nombre");
        $apellido = sanear("apellido");
        $direccion = sanear("direccion");
        $telefono = sanear("telefono");
        $foto = $_FILES["foto"];

        if(!preg_match('/^[A-Za-z][A-Za-z\s]{2,29}[A-Za-z]$/u',$nombre) ||
            !preg_match('/^[A-Z][a-zA-Zñ\s\'-]{1,50}$/u',$apellido) ||
            !preg_match('/^(Calle|Plaza|Avenida)[A-Za-z0-9\s`ñ]+$/',$direccion) ||
            !preg_match('/^(91|6)\d{8}$/',$telefono) ||
            empty($dni)){

                if(!preg_match('/^[A-Za-z][A-Za-z\s]{2,29}[A-Za-z]$/u',$nombre)){
                    $errorNombre = 'errorNombre=1&';
                }
                if(!preg_match('/^[A-Z][a-zA-Zñ\s\'-]{1,50}$/u',$apellido)){
                    $errorApellido = 'errorApellido=1&';
                }
                if(!preg_match('/^(Calle|Plaza|Avenida)[A-Za-z0-9\s`ñ]+$/',$direccion)){
                    $errorDireccion = 'errorDireccion=1&';
                }
                if(!preg_match('/^(91|6)\d{8}$/',$telefono)){
                    $errorTelefono = 'errorTelefono=1';
                }
                if(empty($dni)){
                    $errorDNI = 'errorDni=1&';
                }
                header("location:formInsertar.php?".$errorDNI.$errorNombre.$errorApellido.$errorDireccion.$errorTelefono);
        }else{
            if(is_uploaded_file($foto["tmp_name"])){
                $extensiones = array("image/jpg","image/png");

                if(in_array($foto["type"],$extensiones)){
                    $nombreDirectorio = "imagenes";
                if(!is_dir($nombreDirectorio)){
                    mkdir($nombreDirectorio);
                }
                $nombreArchivo = $foto["name"];
                $ruta = $nombreDirectorio."/".$nombreArchivo;
                move_uploaded_file($foto["tmp_name"],$ruta);

                $conn = conectarBBDD("Matricula2");
                $stmt = $conn->prepare("insert into matriculas(dni,nombre,
                        apellido,direccion,telefono,foto) values (?,?,?,?,?,?)");

                $stmt->execute([$dni,$nombre,$apellido,$direccion,$telefono,$nombreArchivo]);

                print "<p>Operacion realizada con exito</p>";
                print "<p><a href='links.php'>Volver al formulario</a></p>";

                }else{
                    header("location:formInsertar.php?errorExtension=1");
                }                

            }else{
                header("location:formInsertar.php?errorFoto=1");
            }
        }

    }else{
        header("location:login.php?error=1");
    }
?>