<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    
    <form action="validar.php" method="post" enctype="multipart/form-data">
        <p>Nombre: <input type="text" name="nombre" id="nombre"> <br>
        <?php
    if(isset($_GET['error']) && $_GET['error'] == 1){
        print "<p style='color:red'>El nombre esta vacio o incorrecto</p>";
        $abrirFich = fopen("fichErrores","a");
            fwrite($abrirFich,"El nombre esta vacio o incorrecto\n");
    }
        ?>
        Direccion: <input type="text" name="direccion" id="direccion"><br>
        <?php
    if(isset($_GET['error2']) && $_GET['error2'] == 1){
        print "<p style='color:red'>La direccion esta vacia o incorrecta</p>";

            fwrite($abrirFich,"La direccion esta vacia o incorrecta\n");
    }
        ?>
    </p>
        <p>email <input type="text" name="email" id="email"><br>
        <?php
    if(isset($_GET['error3']) && $_GET['error3'] == 1){
        print "<p style='color:red'>El email esta vacio o incorrecto</p>";

            fwrite($abrirFich,"El email esta vacio o incorrecto\n");
            fclose($abrirFich);
    }
        ?>
    </p>
        <input type="file" name="archivo" id="archivo" multiple="multiple" webkitdirectory mozdirectory 
        msdirectory odirectory directory><br><br>
        <?php
        if(isset($_GET['error4']) && $_GET['error4'] == 1){
        print "<p style='color:red'>La carpeta esta vacia</p>";
        $abrirFich = fopen("fichErrores","a");
            fwrite($abrirFich,"La carpeta esta vacia\n");
    }
    ?>
        <input type="submit" name="enviar" value="enviar">
    </form>
<?php

    if(isset($_GET['enviado']) && $_GET['enviado'] == 1){
    $abrirDir = opendir("ficherosSubidos/");
        
                    $arrDir = scandir("ficherosSubidos/");
            echo "<table>";
            $contador = 1;
                    foreach ($arrDir as $Indice => $ficheros) {
                        if($ficheros != "." && $ficheros != ".."){
                        echo "<tr><td>".$contador." ".$ficheros."</td></tr>";
                        $contador++;
                    }
                    }
                    echo "</table>";
                    closedir($abrirDir);
                }
                

?>
</body>
</html>