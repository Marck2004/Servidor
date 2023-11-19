
<?php
include 'funciones2.php';
include 'funciones.php';
colorear();


session_start();
if ($_SESSION['dentro'] != 200) {
    header("Location:inicio.php");
    exit;
} else {
    
    $conexion = conectarMysql("localhost");
    $BD = "BDpersonas";
    conectarBD($conexion, $BD);

    $nombre=sanear('nombreR');
    $localidad=sanear('localidadR');
    $id=sanear('id');

    $update="UPDATE Tpersonas SET Nombre= '$nombre', Localidad= '$localidad'  WHERE (ID=$id)";

    $Pupdate = query($conexion, $update);

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
    if($Pupdate){
        print"<p>Modificacion realizada con exito</p>";
    }

}
?>