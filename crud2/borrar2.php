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
    $borrar=$_REQUEST['borrar'];

    

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

    if ($borrar!="") {
		if(isset($_REQUEST['eliminar'])){
				$arrayId = $_REQUEST['eliminar'];
				foreach ($arrayId as $key => $value) {
					$delete = "DELETE FROM Tpersonas WHERE (ID=$value)";
					query($conexion, $delete);
				}
				print"<p>Borrado con exito</p>";}
				else{print'no has seleccionado el radiobotonn';}
        
    }
}
?>