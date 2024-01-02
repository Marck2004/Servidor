<?php
    include("funciones.php");
    session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){
            if(isset($_REQUEST['enviar'])){
                session_unset();
                session_destroy();
                $conexion = conectarBBDD("Agenda");
                $destruir = $conexion->query("drop database Agenda");
                print "<a href='index.php'>Inicio Sesion</a>";
                print "<p>BASE DE DATOS DESTRUIDA</p>";
                
            }else if(isset($_REQUEST['cancelar'])){
                header("location:links.php");
            }else{
        
            ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <p>¿ESTAS SEGURO?</p>
                    <p><input type="submit" value="Si" name="enviar"><input type="submit" value="No" name="cancelar"></p>
                </form>
            <?php

            }
        }
?>