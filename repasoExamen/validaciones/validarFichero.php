<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        if(isset($_REQUEST['enviar'])){
            print "entra";

                if(is_uploaded_file($_FILES['archivo']['tmp_name'])){

                    $directorio = "pruebaDir/";
                    $fich = $_FILES['archivo']['name'];
                    $nombreCompleto = $directorio.$fich;

                    move_uploaded_file($_FILES['archivo']['tmp_name'],$nombreCompleto);
                    print "<img src='$nombreCompleto'>";
                }else{
                    header("location:validarFichero.php?error=1");
            }
        }else{
    ?>

            <form action="validarFichero.php" method="post" enctype="multipart/form-data">

            <input type="hidden" name="max_file_size" value="<?php echo $max_file_size ?>">

            <input type="file" name="archivo" id="archivo">
            <?php
                if(isset($_GET['error']) && $_GET['error'] == 1){
                    print "<p style='color:red;'>Campo vacio</p>";
                }
            ?>
            <input type="submit" value="enviar" name="enviar">
            </form>
    <?php   
        }
    ?>
</body>
</html>