<?php include("../Funciones.php");

    $nombre = sanear($_REQUEST['Nombre']);
    $edad = sanear($_REQUEST['edad']);

        if(isset($_REQUEST['Comprobar'])){
            if(($edad >= 18 && $edad <= 130) && validarNombre($nombre) == 0){
                print "<p>Su nombre es: <b>".$nombre."</b></p>";
                print "<p>Su edad es: <b>".$edad."</b></p>";
            }else if(($edad < 18 || $edad >130) && validarNombre($nombre) == 1){
                header("location:Ejercicio5.php?pagErronea=0");
            }else if($edad < 18 || $edad >130){
                header("location:Ejercicio5.php?error=0");
            }else if(validarNombre($nombre) == 1){
                header("location:Ejercicio5.php?nombreErroneo=0");
            }
        }
        
?>