
<?php
include "funciones2.php";
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
    borrarBD($conexion, $BD);
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

    $insertarRegistro = "INSERT INTO Tpersonas (nombre,localidad) VALUES ('María','Móstoles')";
    $Pinsercion = query($conexion, $insertarRegistro);
    if ($Pinsercion) {
        print "<p>Insercion realizada</p>";
    }

    $insertarRegistro = "INSERT INTO Tpersonas (nombre,localidad) VALUES ('Rosa','Alcorcón')";
    $Pinsercion = query($conexion, $insertarRegistro);
    if ($Pinsercion) {
        print "<p>Insercion realizada</p>";
    }

    $insertarRegistro = "INSERT INTO Tpersonas (nombre,localidad) VALUES ('Saúl','Villaviciosa')";
    $Pinsercion = query($conexion, $insertarRegistro);
    if ($Pinsercion) {
        print "<p>Insercion realizada</p>";
    }
	$insertarRegistro = "INSERT INTO Tpersonas (nombre,localidad) VALUES ('Vicente','Arroyomolinos')";
    $Pinsercion = query($conexion, $insertarRegistro);
    if ($Pinsercion) {
        print "<p>Insercion realizada</p>";
    }


    $consultar = "SELECT * FROM Tpersonas";
    $Pconsulta = query($conexion, $consultar);
    $matriz = crearMatriz($Pconsulta);

    imprimirTabla($matriz);
}

?>
