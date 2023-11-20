    <link rel="stylesheet" href="style.css">
<?php

    session_start();

        print "<a href='index.php'>Pagina principal</a>";

        if(empty($_SESSION['contador']) && $_SESSION['contador'] == 0){
            header("location:index.php");
        }else{
            ?>
                <form action="insertar.php" method="post">
                    <p>Escriba los datos del nuevo registro</p>
                    <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
                    <?php
                            if(isset($_GET['errorNombre']) && $_GET['errorNombre'] == 1){
                                print "<p style='color:red;'>El campo usuario es erroneo</p>";
                            }
                        
                    ?>
                    <p>Apellidos: <input type="text" name="apellidos" id="apellidos"></p>
                    <?php
                            if(isset($_GET['errorApellido']) && $_GET['errorApellido'] == 1){
                                print "<p style='color:red;'>El campo apellido es erroneo</p>";
                            }
                        
                    ?>
                    <p><input type="submit" value="Añadir" name="enviar"><input type="reset" value="Reiniciar formulario" name="cancelar"></p>
                </form>
            <?php
        }

?>