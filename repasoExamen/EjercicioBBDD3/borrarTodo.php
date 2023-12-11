<link rel="stylesheet" href="style.css">
<?php
    session_start();

        if(empty($_SESSION['contador']) || $_SESSION['contador'] == "0"){
            header('location:index.php');
        }else{

            print "<a href='index.php'>Pagina principal</a>";

            print "¿Quieres borrar todo?";

            ?>

            <form action="confirmarBorrado.php" method="post">
                <p><input type="submit" value="Si" name="enviar">
                <input type="submit" value="No" name="cancelar"></p>
            </form>

            <?php

        }