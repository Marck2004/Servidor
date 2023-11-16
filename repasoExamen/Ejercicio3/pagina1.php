<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
    <p>Introduzca su nombre: <input type="text" name="nombre" id="nombre"></p>
    <p>Comentarios sobre esta pagina web: <textarea name="texto" id="texto" cols="30" rows="10"></textarea></p>
    <input type="submit" value="enviar" name="enviar">
    </form>

    <?php
        if(isset($_REQUEST['enviar'])){

        $abrirFich = fopen("datos.txt",'a');

            fwrite($abrirFich,"---------\n".$_REQUEST['nombre']."\n".$_REQUEST['texto']."\n");

            print "<p>Los datos se cargaron correctamente.\nPulse <a href='pagina2.php'>aqui</a> para ver todo el contenido del fichero</p>";
        }
    ?>
</body>
</html>