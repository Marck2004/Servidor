
<?php
include 'funciones.php';
include 'funciones2.php';
colorear();


session_start();

if ($_SESSION['dentro'] != 200) {
    header("Location:inicio.php");
    exit;
} else {
    print "
    <div class='titulo'>
         <h1>Repaso Marzo-Junio </h1>
    </div>
    <div class='menu'>
        <span>
            <a href='inicio.php'>Inicio</a>
        </span>
    </div>
";

    $nombreRegis = sanear('nombreR');
    $localidadRegis = sanear('localidadR');

    $conexion = conectarMysql("localhost");
    $BD = "BDpersonas";
    conectarBD($conexion, $BD);

    if ($nombreRegis != "" && $localidadRegis != "") {

        print "<p>Registro con Nombre: <b>$nombreRegis</b> y Localidad: <b>$localidadRegis</b> creado correctamente</p>";

        $insertarRegistro = "INSERT INTO Tpersonas (nombre,localidad) VALUES ('$nombreRegis','$localidadRegis')";
        $Pinsercion = query($conexion, $insertarRegistro);
        if ($Pinsercion) {
            print "<p>Insercion realizada</p>";
        }
    } else {
        print "<p><b>INSERCCIÓN DE DATOS FALLIDA</b></p>";
        print "<p>Datos no validos o vacíos<p>";
    }
}
?>