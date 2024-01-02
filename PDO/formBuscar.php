
    <?php

        session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

            ?>
            <a href="links.php">Volver al formulario</a>
                <form action="buscar.php" method="post">
                    <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
                    <p>Apellidos <input type="text" name="apellidos" id="apellidos"></p>
                    <input type="submit" value="Buscar" name="enviar"><input type="reset" value="Reiniciar formulario">
                </form>
            <?php
        }


    ?>
