<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso</title>
    <style>
        .fondo-azul{
            background-Color:#abdefa;
        }
        .final{
            display:inline-block;
        }
    </style>
</head>
<body>
    <div style='boder:3px solid black;'>
    <h3 class='fondo-azul'>Cargar ficheros</h3>

        <form action="sanear.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size; ?>">
    <p class='fondo-azul'>Usuario<input type="text" name="Nombre" id="Nombre">
    <?php if(isset($_GET['error2']) && $_GET['error2'] == 1){
        print "<p style='color:red'>El nombre esta vacio o incorrecto</p>";
    }  
    ?>
    Edad: <input type="number" name="Edad" id="Edad"></p>
    <?php if(isset($_GET['error1']) && $_GET['error1'] == 1){
        print "<p style='color:red'>La edad debe estar entre 18 y 40 años</p>";
    }  
    ?>
    <section class='fondo-azul'>
        <b>Titulo aportado</b><br>
        <input type="file" name="Archivo" id="Archivo"><br><br>
        <input type="submit" value="Cargar Fichero" name="Enviar">
    </section>
    </div>

    <p class='fondo-azul'>Descargas disponibles</p>

        <p>Nombre del archivo <span class='final'>Descargar eliminar</span></p>
    </form>
</body>
</html>