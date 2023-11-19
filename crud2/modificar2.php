
<?php
include 'funciones2.php';
colorear();


session_start();
if ($_SESSION['dentro'] != 200) {
    header("Location:inicio.php");
    exit;
} else {
    
    $conexion = conectarMysql("localhost");
    $BD = "BDpersonas";
    conectarBD($conexion, $BD);
				if (isset($_REQUEST['marcado']))
				{
							$id= $_REQUEST['marcado'];
							$nombre = "SELECT nombre FROM Tpersonas WHERE (id=$id)";
							$localidad= "SELECT localidad FROM Tpersonas WHERE (id=$id)";
							$Pnombre = query($conexion, $nombre);
							$Plocalidad = query($conexion, $localidad);
							
							$Rnombre=mysqli_fetch_row($Pnombre);
							$Rlocalidad=mysqli_fetch_row($Plocalidad);
				
				 print "
    <div class='titulo'>
         <h1>Repaso Marzo-Junio </h1>
    </div>
    <div class='menu'>
        <span>
            <a href='inicio.php'>Inicio</a>
        </span>
    </div>

    <form action='modificar3.php' method='post'>
        <p>Modifique los campos que considere</p>
        <br>
        <span>
        Nombre: <input type='text' name='nombreR' value='$Rnombre[0]'>
        </span>
        <span>
        Localidad: <input type='text' name='localidadR' value='$Rlocalidad[0]'>
        <input type='hidden' name='id' value='$id'>
        </span>
        <br>

        <input type='submit' value='Actualizar'>
        <input type='reset' value='Reiniciar formulario'>

    </form>

";
				
				
				
	}
					
else {print ' no has pulsado el radioboton';}
	

	}
   



?>
