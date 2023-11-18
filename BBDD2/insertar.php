<?php

    session_start();

        if(!isset($_SESSION['resultado'])){
            header('location:bbddInexistente.php');
        }else{
            include "comprobarInsertar.php";
function validar($tipo){
    if(isset($_REQUEST['enviar'])){
        if(empty($_REQUEST[$tipo]) || !preg_match('/^[A-Z][a-zA-Z\s]+$/',$_REQUEST[$tipo])){
            print "<p style='color:red;'>El campo esta vacio o contiene caracteres no aceptados</p>";
            
        }
    }
}
            ?>

            <p><a href="index.php">Pagina inicial</a></p>

            <form action="comprobarInsertar.php" method="post">

            <h3>Escriba los datos del nuevo registro</h3>

            <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
            <?php validar("nombre") ?>
            <br>
            <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>
            <?php validar("apellido") ?>

            <input type="submit" value="enviar" name="enviar">
            <input type="reset" value="Reiniciar formulario" name="cancelar">

            </form>

            
            <?php
        
        }

        
?>
