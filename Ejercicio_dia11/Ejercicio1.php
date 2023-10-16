<!DOCTYPE php>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    <h1>Datos Personales:</h1>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size;?>">
    <p>Nombre: <input type="text" name="Nombre" id="Nombre" >
    Apellido: <input type="text" name="Apellido" id="Apellido">
    </p>

        <p>Edad:<input type="number" name="Number" id="Number"></p>
        <p>Telefono: <input type="number" name="tlf" id="tlf"></p>
        <p>Email: <input type="email" name="email" id="email"></p>
        <p><input type="file" name="imagen" id="imagen"></p>
        <input type="submit" name="Enviar" value="Enviar"><input type="reset" value="Cancelar">
        </form>
        
        <?php
        
    if(isset($_REQUEST['Enviar'])){
        if(is_uploaded_file($_FILES['imagen']['tmp_name'])){
            $nombreDirectorio = "img/";
            $nombreFichero = $_FILES['imagen']['name'];
            $nombreCompleto = $nombreDirectorio.$nombreFichero;
        
            move_uploaded_file($_FILES['imagen']['tmp_name'],$nombreCompleto);
            print "movido";
    }else{
        print "<p>NO SE HA SUBIDO EL FICHERO</p>";
    }
    }
    
        ?>
</body>
</html>
