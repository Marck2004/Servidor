
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
        <h1 > BASES DE DATOS 3 - BUSCAR 2</h1>
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

    $buscar = "SELECT * FROM Tpersonas ";
    $resultado="";
    if ($nombreRegis != "" && $localidadRegis != "") {
        $buscar = $buscar . "WHERE (nombre='$nombreRegis') AND (localidad='$localidadRegis')";
    } else {
        $resultado="<p>Ningun registro encontrado</p>";
    }
    
    if ($nombreRegis != "" && $localidadRegis == "") {
        $buscar = $buscar . "WHERE (nombre='$nombreRegis')";
    } else {
        $resultado="<p>Ningun registro encontrado</p>";
    }

    if ($localidadRegis != "" && $nombreRegis == "") {
        $buscar = $buscar . "WHERE (localidad='$localidadRegis')";
    } else {
        $resultado="<p>Ningun registro encontrado</p>";
    }

    if ($nombreRegis == "" && $localidadRegis == "") {
        $resultado="<p>Ningun parametro solicitado</p>";
    }

    $Pbuscar = query($conexion, $buscar);
    $matriz = crearMatriz($Pbuscar);

    imprimirTabla($matriz);
}
?>