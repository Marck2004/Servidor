<?php

    include("funciones.php");
    comprobarSesion();

    $dni = sanear("dni");
    $nombre = sanear("nombre");
    $apellido = sanear("apellido");
    $direccion = sanear("direccion");
    $telefono = sanear("telefono");
    $foto = $_FILES["foto"];
    $edades = sanear("edades");

    if(empty($dni) || empty($nombre) || empty($apellido) || empty($direccion) || 
    empty($telefono) || empty($edades) || empty($foto)){
        if(empty($dni)){
            $errorDni = 'errordni=1&';
        }
        if(empty($nombre)){
            $errorNombre = 'errornombre=1&';
        }
        if(empty($apellido)){
            $errorApellido = 'errorapellido=1&';
        }
        if(empty($direccion)){
            $errorDireccion = 'errordireccion=1&';
        }
        if(empty($telefono)){
            $errorTelefono = 'errortelefono=1&';
        }
        if(empty($foto)){
            $errorfoto = 'errorfoto=1&';
        }
        if(empty($edades)){
            $errorEdades = 'erroredades=1';
        }
        header("location:formInsertar.php?".$errorDni.$errorNombre.$errorApellido.$errorDireccion.
           $errorTelefono.$errorfoto.$errorEdades);
    }else{

        if(is_uploaded_file($foto["tmp_name"])){
            $directorio = "fotos";
            $fichero = $foto["name"];

            if(!is_dir($directorio)){
                mkdir($directorio);
            }
            $ruta = $directorio."/".$fichero;
            switch ($foto["error"]) {
                case 0:
                    move_uploaded_file($foto["tmp_name"],$ruta);
                    break;
                case 1:
                    header("locationformInsertar?valorPHP=1");
                    break;
                case 2:
                    header("locationformInsertar?valorForm=1");
                    break;
                default:
                move_uploaded_file($foto["tmp_name"],$ruta);
                    break;
            }
            $conn = conectarBBDD("Matricula2");
            //PREPARAMOS LA CONSULTA
            $stmt = $conn->query("show columns from matriculas");
            $stmt = $stmt ->fetchAll(PDO::FETCH_ASSOC);
            $listaCampos = array();
            foreach ($stmt as $campos) {
                $listaCampos[] = $campos["Field"];
            }
            $cadenaCampos = implode(",",$listaCampos);
            $listaValores = array();
            foreach ($listaCampos as $interrogacion) {
                $listaValores[] = '?';
            }
            $cadenaValores = implode(",",$listaValores);
            
            $listaEnviada = array();

            foreach ($stmt as $enviado) {
                if($enviado["Field"] == "foto"){
                    $listaEnviada[] = $foto["name"];
                }else{
                    $listaEnviada[] = $_POST[$enviado["Field"]];
                }
            }

            $stmt = $conn->prepare("insert into matriculas ($cadenaCampos)
                 values ($cadenaValores)");

            $stmt->execute($listaEnviada);

            print "<p>Insercion realizada con exito</p>";
            print "<p><a href='links.php'>Volver al formulario</a></p>";
        }
    }

?>