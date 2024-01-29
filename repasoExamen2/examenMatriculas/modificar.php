<?php

    include("funciones.php");

    $dni = sanear("dni");
    $nombre = sanear("nombre");
    $apellido = sanear("apellido");
    $direccion = sanear("direccion");
    $telefono = sanear("telefono");
    $foto = $_FILES["foto"];

    if(!preg_match('/^[A-Za-zÁáÉéíÍóÓÚúñÑ\s][A-Za-zÁáÉéíÍóÓÚúñÑ\s]{2,29}$/',$nombre) ||
        !preg_match('/^[A-Za-zÁáÉéíÍóÓÚúñÑ\s][A-Za-zÁáÉéíÍóÓÚúñÑ\s]{2,49}$/',$apellido) ||
        !preg_match('/^(Calle|Plaza|Avenida)[A-Za-zÁáÉéíÍóÓÚúñÑ\s]+$/',$direccion) ||
        !preg_match('/^(91|6)\d{7,8}$/',$telefono) ||
        empty($dni) ||
        !is_uploaded_file($foto["tmp_name"])){

            if(!preg_match('/^[A-Za-zÁáÉéíÍóÓÚúñÑ\s][A-Za-zÁáÉéíÍóÓÚúñÑ\s]{2,29}$/',$nombre)){
                $errorNombre = 'errorNombre=1&';
            }
            if(!preg_match('/^[A-Za-zÁáÉéíÍóÓÚúñÑ\s][A-Za-zÁáÉéíÍóÓÚúñÑ\s]{2,49}$/',$apellido)){
                $errorApellido = 'errorApellido=1&';
            }
            if(!preg_match('/^(Calle|Plaza|Avenida)[A-Za-zÁáÉéíÍóÓÚúñÑ\s]+$/',$direccion)){
                $errorDireccion = 'errorDireccion=1&';
            }
            if(!preg_match('/^(91|6)\d{7,8}$/',$telefono)){
                $errorTelefono = 'errorTelefono=1';
            }
            if(empty($dni)){
                $errorDni = 'errorDni=1&';
            }
            if(!is_uploaded_file($foto["tmp_name"])){
                $errorFoto = "errorFoto=1&";
            }
            header("location:formModif2.php?".$errorDni.$errorNombre.$errorApellido.$errorDireccion
                .$errorFoto.$errorTelefono);
        }else{
            $listaTipo = array("image/png","imagen/jpg");
            if(in_array($foto["type"],$listaTipo)){
                $directorio = "imagenes/";
                $fichero = $foto["name"];
                if(!is_dir($directorio)){
                    mkdir($directorio);
                }
                $ruta = $directorio.$fichero;
                move_uploaded_file($foto["tmp_name"],$ruta);

                try{
                    
                    $conn = conectarBBDD("Matriculas3");


                        $stmt = $conn->prepare("update matriculas set dni=?,nombre=?,
                        apellidos=?,direccion=?,telefono=?,foto=? where dni=?");

                    $stmt->execute([$dni,$nombre,$apellido,$direccion,$telefono,$fichero,$dni]);

                    print "<p>La modificacion resulto existosa</p>";
                    print "<p><a href='links.php'>Volver al menu</a></p>";
                    

                }catch(PDOException $e){
                    print $e->getMessage();
                }
            }else{
                $errorTipo = 'errorTipo=1';
                header("location:formModif.php?".$errorTipo);
            }
        }

        

?>