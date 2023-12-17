
<?php
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

    $conexion = conectarMysql("localhost");
    $BD = "BDpersonas";
    conectarBD($conexion, $BD);

    $buscar = "SELECT * FROM Tpersonas ";
    $Pbuscar = query($conexion, $buscar);
    $matriz = crearMatriz($Pbuscar);

    print "<form action='borrar2.php'>";
    $borrador = checkRegistro($matriz);
    imprimirTabla($borrador);

    if (empty($matriz)) {
        print "Tabla vacia";
    } else {
        print "<input type='submit' name='borrar' value='Eliminar'></form>";
    }

}
?>