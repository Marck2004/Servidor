<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina 1</title>
</head>

    <?php

        session_start();

            if(isset($_REQUEST['enviar']) && isset($_REQUEST['reiniciar'])){
                $_SESSION['contador'] = 1;
            }else if(isset($_SESSION['contador'])){
                $_SESSION['contador'] = $_SESSION['contador']+ 1;
            }else{
                $_SESSION['contador'] = 1;
            }

    ?>
<body>
    
    <h1>CONTADOR DE PAGINAS</h1>

    <p>Numero de paginas recargadas <?php print $_SESSION['contador'] ?></p>

    <p>Recarga la pagina <a href="Contador.php">aquí</a> .El contador se incrementa en 1.</p>

    <h6>REINICIAR EL CONTADOR</h6>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <p><input type="checkbox" name="reiniciar" id="reiniciar">Elige esta opcion y selecciona enviar</p>
    <input type="submit" value="enviar" name="enviar">
    </form>

    <p>Otras paginas de las session</p>

    <p>Pagina 1: <a href="guardarDatos.php">Insertar mas variables</a></p>
    <p>Pagina 2: <a href="mostrarDatos.php">Datos de la session</a></p>

</body>
</html>