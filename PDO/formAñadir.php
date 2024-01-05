<?php
    session_start();
    if(isset($_SESSION["usuario"]) && isset($_SESSION["clave"])){
        print "<p><a href='links.php'>Volver</a></p>";

        print "<p>Escriba los datos de la nueva columna</p>";

            ?>
                <form action="añadir.php" method="post">
                    <p>Nombre de la columna <input type="text" name="nombre" id="nombre"></p>
                    <?php
                        if(isset($_GET['errorNombre']) && $_GET['errorNombre'] == 1){
                            print "<p style='color:red'>Campo vacio</p>";
                        }
                    ?>
                    <p>Tipo de dato y tamaño <input type="text" name="dato" id="dato"></p>
                    <?php
                        if(isset($_GET['errorDato']) && $_GET['errorDato'] == 1){
                            print "<p style='color:red'>Campo vacio</p>";
                        }
                    ?>
                    <input type="submit" value="Añadir columna" name="enviar"><input type="reset" value="Reiniciar formulario">
                    <?php
                        if(isset($_GET['exceso']) && $_GET['exceso'] == 1){
                            print "<p style='color:red'>Esa columna ya existe</p>";
                        }
                    ?>
                </form>
            <?php
    }else{
        header("location:index.php?error=1");
    }

?>