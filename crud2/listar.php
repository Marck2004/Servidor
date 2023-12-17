
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
            <h1 > BASES DE DATOS 3 - LISTAR</h1>
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

    $listar = "SELECT * FROM Tpersonas ORDER BY localidad ";
    $Plistar = query($conexion, $listar);
    $matriz = crearMatriz($Plistar);
    if (count($matriz)<1) {
       print"<p>La tabla esta vacía</p>";
    }else {
        imprimirTabla($matriz);

    }
}
?>