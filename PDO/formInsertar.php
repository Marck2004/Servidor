
    <?php

        session_start();

        if(isset($_SESSION['usuario']) && isset($_SESSION['clave'])){

            ?>
            <form action="insertar.php" method="post">
                <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
                <?php
                    if(isset($_GET['errorNombre']) && $_GET['errorNombre'] == 1){
                        print "<p style='color:red'>Campo vacio/incorrecto</p>";
                    }
                ?>
                <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>
                <?php
                    if(isset($_GET['errorApellido']) && $_GET['errorApellido'] == 1){
                        print "<p style='color:red'>Campo vacio/incorrecto</p>";
                    }
                ?>
                <p>Direccion: <input type="text" name="direccion" id="direccion"></p>
                <?php
                    if(isset($_GET['errorDireccion']) && $_GET['errorDireccion'] == 1){
                        print "<p style='color:red'>Campo vacio/incorrecto</p>";
                    }
                ?>
                <p>Telefono: <input type="number" name="tlf" id="tlf"></p><?php
                    if(isset($_GET['errorTlf']) && $_GET['errorTlf'] == 1){
                        print "<p style='color:red'>Campo vacio/incorrecto</p>";
                    }
                ?>
                <input type="submit" value="Insertar" name="enviar"><input type="reset" value="Resetear" name="resetear">
            </form>
            <?php
        }else{
            header("location:index.php?error=1");
        }

    ?>