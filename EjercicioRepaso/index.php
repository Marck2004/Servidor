<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repaso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
   <style>
        .fondo-azul{
            background-Color:#abdefa;
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

    <table>
        <th style='width:1200px;'>Nombre del archivo</th><th style='width:200px;'>Descargar</th><th>Eliminar</th>
    <tr>
        <td>
            <?php 
            if(isset($_GET['correcto'])){

                print $_GET['correcto'];
            } 
            ?>
        </td>
        <td>
        <?php 
            if(isset($_GET['correcto3'])){
                print "<img src=".$_GET['correcto3'].">";
            } 
            ?>
        </td>
        <td>
        <?php 
            if(isset($_GET['correcto2'])){
                ?><a href="index.php"><?php
                print "<img src=".$_GET['correcto2'].">";?>
                </a><?php
            } 
            ?>
        </td>
    </tr>
    </table>
        
    </form>
</body>
</html>