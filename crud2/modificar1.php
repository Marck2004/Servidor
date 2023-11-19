
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

        <form action='modificar2.php' method='post'>
            <p>Indique el registro que quiere modificar</p>
    ";

    $conexion = conectarMysql("localhost");
    $BD = "BDpersonas";
    conectarBD($conexion, $BD);

    $buscar = "SELECT * FROM Tpersonas ";
    $Pbuscar = query($conexion, $buscar);
    $matriz = crearMatriz($Pbuscar);


    if (empty($matriz)) {
        print "<p><b>Tabla vacía</b></p>";
    } else {
        $modificar = radioRegistro($matriz);
        imprimirTabla($modificar);
    }
    print "
        <input type='submit' value='Modificar'>
        <input type='reset' value='Reiniciar formulario'>
        </form>
    ";
}
?>