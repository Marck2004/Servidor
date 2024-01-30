<?php

    include("funciones.php");
    manejarSesion();

    if(isset($_POST["enviar"])){

        $tipo = sanear("tipo");
        $zona = sanear("zona");
        $direccion = sanear("direccion");
        $dormitorios = sanear("ndormitorios");
        $precio = sanear("precio");
        $tamano = sanear("tamano");
        $extras = $_POST["extras"];
        $foto = $_FILES["foto"];
        $observaciones = sanear("observaciones");

        if(empty($tipo) || empty($zona) || empty($direccion) || empty($dormitorios) ||
            empty($precio) || empty($tamano) || empty($extras)){
                if(empty($tipo)){
                    $errorTipo ='errorTipo=1&';
                }
                if(empty($zona)){
                    $errorZona ='errorZona=1&';
                }
                if(empty($direccion)){
                    $errorDireccion = 'errorDireccion=1&';
                }
                if(empty($dormitorios)){
                    $errorDormitorio = 'errorDormitorio=1&';
                }
                if(empty($precio)){
                    $errorPrecio = 'errorPrecio=1&';
                }
                if(empty($tamano)){
                    $errorTamano = 'errorTamano=1&';
                }
                if(empty($extras)){
                    $errorExtras = 'errorExtras=1';
                }
                header("location:formInsertar.php?".$errorTipo.$errorZona.$errorDireccion.$errorDormitorio.
                $errorPrecio.$errorTamano.$errorExtras);
            }else{
                $conn = conectarBBDD("marzo3");
                $stmt=$conn->prepare("select * from viviendas where direccion=? and precio=? 
                    and dormitorios=?");
                $stmt->execute([$direccion,$precio,$dormitorios]);

                if($stmt->rowCount() == 0){

                    if(is_uploaded_file($foto["tmp_name"])){

                        $directorio = "ficheros/";
                        $fichero = $foto["name"];
                        if(!is_dir($directorio)){
                            mkdir($directorio);
                        }
                        $ruta = $directorio.$fichero;
                        move_uploaded_file($foto["tmp_name"],$ruta);

                        if(!is_dir("ficheros")){
                            mkdir("ficheros");
                        }
                        if(!is_dir("errores/")){
                            mkdir("errores/");
                        }
                        error_log("El fichero se ha subido correctamente".PHP_EOL,3,"errores/archivos.txt");
                        $foto = $foto["name"];
                    }else{
                        switch ($foto["error"]) {
                            case 1:
                                error_log("El fichero subido excede la directiva upload_max_filesize de php.ini ".PHP_EOL,3,"errores/archivos.txt");
                                header("location:formInsertar.php?ini=1");
                                break;
                            case 2:
                                error_log("El fichero subido excede la directiva MAX_FILE_SIZE especificada en
                                el formulario HTML ".PHP_EOL,3,"errores/archivos.txt");
                                header("location:formInsertar.php?form=1");
                                break;
                            case 4:
                                error_log("No se subio ningun fichero".PHP_EOL,3,"errores/archivos.txt");
                                $foto = "sin foto";
                                break;
                            default:
                                break;
                        }
                    }
                    try{
                    $extras = implode(",",$extras);
                    $stmt=$conn->prepare("insert into viviendas(tipo,zona,direccion,
                        dormitorios,precio,tamaño,extras,foto) values 
                            (?,?,?,?,?,?,?,?)");

                            $stmt->execute([$tipo,$zona,$direccion,$dormitorios,$precio,$tamano,
                            $extras,$foto]);
                    echo "<ul>
                        <li>Tipo: $tipo</li>
                        <li>Zona: $zona</li>
                        <li>Direccion: $direccion</li>
                        <li>Numero de dormitorios: $dormitorios</li>
                        <li>Precio: $precio</li>
                        <li>Tamaño: $tamano</li>
                        <li>Extras: $extras</li>
                        <li>Foto: <a href='imagenes/$foto'>$foto</a></li>
                        <li>Observaciones$observaciones</li>
                    </ul>";
                    print "<p>[ <a href='formInsertar.php'>Insertar otra vivienda ]</a></p>";
                }catch(PDOException $e){
                    print $e->getMessage();
                }
                }else{
                    header("location:formInsertar.php?encontrado=1");
                }
            }

    }else{
        header("location:login.php?error=1");
    }
?>