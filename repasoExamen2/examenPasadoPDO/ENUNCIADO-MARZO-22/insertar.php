<?php

session_start();
include("funciones.php");

if(isset($_POST["insertar"]) && isset($_SESSION["usuario"])){

$vivienda = $_POST["tipo"];
$zona = $_POST["zona"];
$direccion = $_POST["direccion"];
$nDormitorios = $_POST["ndormitorios"];
$precio = $_POST["precio"];
$tamaño = $_POST["tamano"];
$extras = $_POST["extras"];
$foto = $_FILES["foto"];
$observaciones = $_POST["observaciones"];

if(empty($direccion) || empty($precio) || empty($tamaño) ||
empty($extras)){
if(empty($direccion)){
$errorDireccion = 'errorDireccion=1&';
}
if(empty($precio)){
$errorPrecio = 'errorPrecio=1&';
}
if(empty($tamaño)){
$errorTamaño = 'errorTamaño=1&';
}
if(empty($extras)){
$errorExtras = 'errorExtras=1';
}
header("location:formInsertar.php?".$errorDireccion.$errorPrecio.$errorTamaño.$errorExtras);
}else{

$conexion = conectarBBD("marzo");

$select = "select * from viviendas where direccion=? and precio=? and tamaño=?
            and extras=?";

$ejecutarSelect=$conexion->prepare($select);
$extrasCadena = implode(",",$extras);

$ejecutarSelect->execute([$direccion,$precio,$tamaño,$extrasCadena]);

if($ejecutarSelect->rowCount() > 0){
header("location:formInsertar.php?igualdad=1");
}else{

    $directorio = "img/";
    if(!is_dir($directorio)){
        mkdir($directorio);
    }
    $archivo = $foto["name"];
    $ruta = $directorio.$archivo;
    move_uploaded_file($foto["tmp_name"],$ruta);
    
    if($foto["error"] == UPLOAD_ERR_OK){
        if(!is_dir("errores")){
            mkdir("errores");
        }
        $logFile = "errores/log.txt";
        $mensajeLog = "Fichero subido con éxito." . PHP_EOL;
        file_put_contents($logFile, $mensajeLog, FILE_APPEND);

        //insercion

        $insert = "insert into viviendas 
        (tipo,zona,direccion,dormitorios,precio,tamaño,extras,foto)
         values (?,?,?,?,?,?,?,?)";

        $ejecutarInsert = $conexion->prepare($insert);

        $ejecutarInsert->execute([$vivienda,$zona,$direccion,$nDormitorios,
                    $precio,$tamaño,$extrasCadena,$foto["name"]]);

        print "Datos introducidos: ";
    print "<ul>";
        
    echo "<li>Tipo: $vivienda</li>
    <li>zona: $zona</li>
    <li>direccion: $direccion</li>
    <li>dormitorios: $nDormitorios</li>
    <li>precio: $precio</li>
    <li>tamaño: $tamaño</li>
    <li>extras: $extrasCadena</li>
    <li>foto:". $foto['name']."</li>
    <li>observaciones:". $observaciones."</li>";

    print "</ul>";
        print "<a href='formInsertar.php'>Insertar otra vivienda</a><br>";
        print "<a href='links.php'>Volver al menu</a>";
    }else{
        print "entra";
        switch ($foto["error"]) {
            case UPLOAD_ERR_INI_SIZE:
                if(!is_dir("errores")){
                    mkdir("errores");
                }
                $logFile = "errores/log.txt";
                $mensajeLog = "Fichero demasiado grande " . PHP_EOL;
                file_put_contents($logFile, $mensajeLog, FILE_APPEND);
                header("location:formInsertar.php?errorGrande=1");
                break;
                case UPLOAD_ERR_FORM_SIZE:
                    if(!is_dir("errores")){
                        mkdir("errores");
                    }
                    $logFile = "errores/log.txt";
                    $mensajeLog = "Fichero demasiado grande en el formulario " . PHP_EOL;
                    file_put_contents($logFile, $mensajeLog, FILE_APPEND);
                    header("location:formInsertar.php?errorGrandeform=1");
                    break;
                    case UPLOAD_ERR_NO_FILE :
                        if(!is_dir("errores")){
                            mkdir("errores");
                        }
                        $logFile = "errores/log.txt";
                        $mensajeLog = "No se ha subido ningun fichero " . PHP_EOL;
                        file_put_contents($logFile, $mensajeLog, FILE_APPEND);
                        header("location:formInsertar.php?errorSubida=1");
                        break;
            default:
                break;
        }
    }

}
}

}else{
manejarError("Credenciales incorrectas");
header("location:index.php?error=1");
}

?>