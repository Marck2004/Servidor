<?php
    session_start();

        if(!isset($_SESSION['resultado'])){
            print "<h1 style='color:red;'>PRIMERO DEBE CREAR LA BASE DE DATOS</h1>";
            
        }
?>