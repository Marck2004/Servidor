<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="enviar" name="enviar">
    </form>

    <?php

        if(isset($_REQUEST['enviar'])){
            if(is_uploaded_file($_FILES['archivo']['tmp_name'])){
                $directorio = 'img/';
                $nombreArchivo = $_FILES['archivo']['name'];

                $nombreCompleto = $directorio.$nombreArchivo;

                move_uploaded_file($_FILES['archivo']['tmp_name'],$nombreCompleto);

                print "<a href='$nombreCompleto'>Pulsa para ver la imagen</a>";
            }else{
                print "<p>Fallo al subir el archivo</p>";
            }
        }

    ?>

</body>

</html>