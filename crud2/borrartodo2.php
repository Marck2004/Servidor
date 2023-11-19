<?php
include "funciones2.php";
colorear();

session_start();

if ($_SESSION['dentro'] != 200) {
    header("Location:inicio.php");
    exit;
} else {

    if (isset($_REQUEST['no'])) {
        header("Location:inicio.php");
        exit;
    } else {
        print "
            <div class='titulo'>
                <h1 > BASES DE DATOS 3 - BORRAR TODO 2</h1>
            </div>
            <div class='menu'>
                <span>
                    <a href='inicio.php'>Inicio</a>
                </span>
            </div>
        ";

        $conexion = conectarMysql("localhost");

        $BD = "BDpersonas";
        borrarBD($conexion, $BD);
        print "<p>Tabla borrada</p>";
        crearBD($conexion, $BD);
        conectarBD($conexion, $BD);

        $crearTabla = "CREATE TABLE Tpersonas(
            ID int primary key auto_increment,
            Nombre varchar(25) not null,
            Localidad varchar(25) not null)";
        
            $PtablaCreada = query($conexion, $crearTabla);
            if ($PtablaCreada) {
                print "<p>Tabla creada</p>";
            }
    }
}
