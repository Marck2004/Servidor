<?php

    session_start();

    if(isset($_REQUEST['eliminar']) && isset($_REQUEST['enviar'])){
        session_unset();
    }else if(isset($_REQUEST['acabarSesion']) && isset($_REQUEST['enviar'])){
        session_unset();
        session_destroy();
    }

    if(!isset($_SESSION['contador'])){
        $_SESSION['contador'] = 1;
    }else{
        $_SESSION['contador'] = $_SESSION['contador'] + 1;
    }

    print "<h1>Informacion y cerrar sesion</h1>";
    
    print "<p>Has recargado ". $_SESSION['contador'] ."</p>";

?>
    <h3>Informacion de la sesion</h3>

<?php

    print "<p>Id de la session: ".session_id()."</p>";
    print "<p>Nombre de la session: ".session_name()."</p>";
    print "<p>Ruta de guardar las variables: ".session_save_path()."</p>";
    print "<ul>";
    foreach ($_SESSION as $valor => $Indice) {
        print "<li>".$valor." = ".$Indice."</li>";
    }   
    print "</ul>";


?>
    <h3>Eliminar variables y acabar sesion</h3>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <p><input type="checkbox" name="eliminar" id="eliminar">Eliminar todos los datos</p>
    <p><input type="checkbox" name="acabarSesion" id="acabarSesion">Acaba la sesion. Empieza una nueva, todos los datos se eliminan</p>
    <input type="submit" value="enviar" name="enviar">
    <p>Para comprobarlo debes reiniciar la pagina</p>
    </form>

    <h3>Cambiar la pagina</h3>

    <p>Ir a la pagina 1: <a href="Contador.php">Recargar y contar</a></p>
    <p>Ir a la pagina 2: <a href="guardarDatos.php">Recoger datos</a></p>
    <p>Recargar esta pagina: <a href="mostrarDatos.php">Informacion y cierre</a></p>