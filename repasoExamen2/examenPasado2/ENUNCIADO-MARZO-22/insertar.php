<?php

    include("funciones.php");

    comprobarSesion();

    if(isset($_POST["insertar"])){

    
    $tipo = sanear("tipo");
    $zona = sanear("zona");
    $direccion = sanear("direccion");
    $dormitorios = sanear("ndormitorios");
    $precio = sanear("precio");
    $tamaño = sanear("tamano");
    $extras = $_POST["extras"];
    $foto = $_FILES["foto"];
    $observacion = sanear("observaciones");

    if(empty($tipo) || empty($zona) || empty($direccion) || empty($dormitorios) ||
        empty($precio) || empty($tamaño) || empty($extras)){
            if(empty($tipo)){
                $errorTipo = 'errorTipo=1&';
            }
            if(empty($zona)){
                $errorZona = 'errorZona=1&';
            }
            if(empty($direccion)){
                $errorDireccion = 'errorDireccion=1&';
            }
            if(empty($dormitorios)){
                $errorDormitorios = 'errorDormitorios=1&';
            }
            if(empty($precio)){
                $errorPrecio = 'errorPrecio=1&';
            }
            if(empty($tamaño)){
                $errorTamaño = 'errorTamaño=1&';
            }
            if(empty($extras)){
                $errorExtras = 'errorExtras=1&';
            }
            header("location:formInsertar.php?".$errorTipo.$errorZona.$errorDireccion.
                $errorDormitorios.$errorPrecio.$errorTamaño.$errorExtras);
        }else{
            $conn = conectarBBDD("marzo2");
            $stmt = $conn->prepare("select * from viviendas where direccion = ?
                and tipo = ?");
                $stmt->execute([$direccion,$tipo]);
            if($stmt->rowCount() != 0){
                header("location:formInsertar.php?encontrado=1");
            }

            if(is_uploaded_file($foto["tmp_name"])){
                $directorio = "fichSubido/";
                $fichero = $foto["name"];
                if(!is_dir($directorio)){
                    mkdir($directorio);
                }
                $ruta = $directorio.$fichero;
                move_uploaded_file($foto["tmp_name"],$ruta);
                $foto = $foto["name"];
            }else{
                switch ($foto["error"]) {
                    case 1:
                        header("location:formInsertar.php?formSize=1");
                        break;
                    case 2:
                        header("location:formInsertar.php?phpSize=1");
                        break;
                    case 4:
                        $foto = " ";
                        captarErrores("No se subio ningun fichero");
                        break;
                    default:
                        break;
                }
            }
            $cadenaExtras = implode(",",$extras);
            try{
            $stmt = $conn->prepare("insert into viviendas
            (tipo,zona,direccion,dormitorios,precio,tamaño,extras,foto)
            values(?,?,?,?,?,?,?,?)");
            $stmt->execute([$tipo,$zona,$direccion,$dormitorios,$precio,$tamaño,$cadenaExtras,$foto]);
            }catch(PDOException $e){
                print $e->getMessage();
        }
        
        echo "<p>Estros on los datos introducidos:</`p>
        <ul>
            <li>Tipo: $tipo</li>
            <li>Zona: $zona</li>
            <li>Direccion: $direccion</li>
            <li>Numero de Dormitorios: $dormitorios</li>
            <li>Precio: $precio</li>
            <li>Tamaño: $tamaño</li>
            <li>Extras: $cadenaExtras</li>
            <li>Foto: <a href='imagenes/$foto' target='_blank'>$foto</a></li>
            <li>Observaciones: $observacion</li>
        </ul>
        
        <p><a href='formInsertar.php'>Insertar otra vivienda</a></p>";

        }
    }else{
        header("location:login.php?error=1");
    }

?>