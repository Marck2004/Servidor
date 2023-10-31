
<?php include("../Funciones.php"); 

    $nombre = sanear($_REQUEST['Nombre']);
    if(isset($_REQUEST['Comprobar'])){
        if(validarNombre($nombre) == 0){
            print "<p>El nombre introducido es: <b>".$_REQUEST['Nombre']."</b></p>";?>
            <p><a href="Ejercicio3.php">Volver al formulario</a></p>
            <?php
        }else{
            header("location:Ejercicio3.php?error=1");
        }
    }

?>