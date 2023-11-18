
<?php
    session_start();

        if(!isset($_SESSION['resultado'])){
            header('location:bbddInexistete.php');
        }else{
            print "<a href='index.php'> Pagina principal</a>";
            if(isset($_REQUEST['modificar'])){
               
            ?>
                <form action="confirmarMod.php" method="post">
                    <p>Modifique los campos que desee</p>
                
                        <input type="hidden" name="id" value="<?php echo $_REQUEST['modificar'] ?>">
                        <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
                        <p>Apellidos: <input type="text" name="apellido" id="apellido"></p>

                        <p><input type="submit" value="enviar" name="enviar">
                        <input type="reset" value="Reiniciar formulario"></p>
                </form>
            <?php
            }else{
                print "<p>Tiene que seleccionar alguno</p>";
            }
        }
?>