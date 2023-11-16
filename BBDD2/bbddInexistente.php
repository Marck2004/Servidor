<?php
    session_start();

        if($_SESSION['resultado'] == 0){
            print "<h1 style='color:red;'>PRIMERO DEBE CREAR LA BASE DE DATOS</h1>";
            
        }
?>