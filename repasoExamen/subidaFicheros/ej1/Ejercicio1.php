<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Los valores introducidos son</h1>

        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">

        <input type="file" name="fichero" id="fichero">

        <input type="submit" value="enviar" name="enviar">
        </form>

        <?php

            if(isset($_REQUEST['enviar'])){
                if(is_uploaded_file($_FILES['fichero']['tmp_name'])){
                    $directorio = 'img/';
                    $nombreFichero = $_FILES['fichero']['name'];
                    $nombreCompleto = $directorio.$nombreFichero;
                    move_uploaded_file($_FILES['fichero']['tmp_name'],$nombreCompleto);
                    print "<img src='$nombreCompleto'>";
                }else{
                    print "No se ha podido subir el fichero";
                }
            }

        ?>

</body>
</html>