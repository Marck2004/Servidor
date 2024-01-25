<style>
    .error{
        color:red;
    }
</style>
<?php
    include("funciones.php");

    comprobarSesion();

    $conn = conectarBBDD("Agenda2");

    $stmt=$conn->query("select * from personas");

    if($stmt->rowCount() >= 10){
        header("location:links.php?max=1");
    }else{
        ?>

        <form action="insertar.php" method="post">
            <p>Nombre: <input type="text" name="nombre" id="nombre"></p>
            <?php
                if(isset($_GET["errorNombre"]) && $_GET["errorNombre"] == 1){
                captarErrores("Campo vacio");
                print "<p class='error'>Campo Vacio</p>";
                }
            ?>
            <p>Apellido: <input type="text" name="apellido" id="apellido"></p>
            <?php
                if(isset($_GET["errorApellido"]) && $_GET["errorApellido"] == 1){
                captarErrores("Campo vacio");
                print "<p class='error'>Campo Vacio</p>";
                }
            ?>
            <p>Direccion: <input type="text" name="direccion" id="direccion"></p>
            <?php
                if(isset($_GET["errorDireccion"]) && $_GET["errorDireccion"] == 1){
                captarErrores("Campo vacio");
                print "<p class='error'>Campo Vacio</p>";
                }
            ?>
            <p>Telefono: <input type="text" name="telefono" id="telefono"></p>
            <?php
                if(isset($_GET["errorTelefono"]) && $_GET["errorTelefono"] == 1){
                captarErrores("Campo vacio");
                print "<p class='error'>Campo Vacio</p>";
                }
            ?>
            <input type="submit" value="Insertar" name="enviar"><input type="reset" value="cancelar">
            <?php
                if(isset($_GET["igual"]) && $_GET["igual"] == 1){
                captarErrores("Registro encontrado");
                print "<p class='error'>Registro encontrado</p>";
                }
            ?>
        </form>

        <?php
    }

?>