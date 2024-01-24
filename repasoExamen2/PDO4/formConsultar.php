<?php

    session_start();
    include("funciones.php");
    if(isset($_SESSION["usuario"])){

        ?>

        <form action="consultar.php" method="post">
            <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
            <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>
            <input type="submit" value="enviar" name="enviar"><input type="reset" value="cancelar">
        </form>

        <?php

    }else{
        header("location:index.php?error=1");
    }

?>