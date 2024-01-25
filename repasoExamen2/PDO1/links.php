<style>
    .error{
        color:red;
    }
</style>
<?php

    include("funciones.php");
    comprobarSesion();
?>
<h1>MENU</h1>
<p><a href="formInsertar.php">Insertar</a></p>
<p><a href="listar.php">Listar</a></p>
<p><a href="formBorrar.php">Borrar</a></p>
<p><a href="desconexion.php">Desconectar</a></p>
<?php

    if(isset($_GET["max"]) && $_GET["max"] == 1){
        captarErrores("Maximo numero de registros alcanzado");
        print "<p class='error'>Maximo numero de registros alcanzado</p>";
    }
    if(isset($_GET["noRegistros"]) && $_GET["noRegistros"] == 1){
        captarErrores("No hay registros en la tabla");
        print "<p class='error'>No hay registros en la tabla</p>";
    }

?>